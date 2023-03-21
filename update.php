<?php
// Enter your code here, enjoy!

$demo = <<<'EOF'
					<li id="{:md5(uniqid(md5(microtime(true)),true))}">
						<span>##name##：</span>
                        <notempty name="file_##id##">
                            <xfupload file_id="##id##">增加</xfupload>
                            <foreach name="file_##id##" key="url" item="name">
                                <php>$file_url=cmf_get_file_download_url($url);</php>
                                <php>$file_id=hash("sha256", uniqid() . $url);</php>
                                <div id="{$file_id}">
                                    <upload_span></upload_span>
                                    <xfpreview onclick="xfPreview('{$file_url}')">预览</xfpreview>
                                    <xfdelete onclick="javascript:handleDelete('#{$file_id}');">删除</xfdelete>
                                    <input type="text" autocomplete="off" name="file_name_##id##[]" value="{$name}">
                                    <input type="text" autocomplete="off" hidden name="file_url_##id##[]" value='{$url}'>
                                </div>
                            </foreach>
                            <else />
                            <xfupload file_id="##id##">上传</xfupload>
                        </notempty>
                	</li>
EOF;

        $options = [
            '2' => '施工计划',
            '3' => '单元工程验收',
            '4' => '分部工程验收',
            '5' => '单位工程验收',
            '7' => '开工令',
            '8' => '施工方案',
            '9' => '施工进度',
            '10' => '施工质量',
            '11' => '施工安全',
            '12' => '单位工程开工资料',
            '13' => '分布工程开工资料',
            '14' => '单元评定资料',
            '15' => '检测资料',
            '16' => '安全生产',
            '17' => '机械进场报验',
            '18' => '材料进场报验',
        ];
        
 foreach($options as $id => $name){
 	$tmp = str_replace('##name##', $name, $demo);
 	$tmp = str_replace('##id##', $id, $tmp);
 	echo "$tmp\n";
 }
