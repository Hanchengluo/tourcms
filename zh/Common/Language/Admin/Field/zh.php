<?php
if (!defined("ZHPHP_PATH")) exit('No direct script access allowed');


return array(
    
    //controller
    'admin_field_control_init_error1'=>'Model不存在！',
    'admin_field_control_update_sort_success1'=>'排序成功',
    'admin_field_control_add_error1'=>'参数错误',
    'admin_field_control_add_success1'=>'Field添加成功',
    'admin_field_control_edit_error1'=>'参数错误',
    'admin_field_control_edit_error2'=>'参数错误',
    'admin_field_control_edit_success1'=>'修改成功',
    'admin_field_control_del_success1'=>'Field删除成功',
    'admin_field_control_update_cache_error1'=>'参数错误',
    'admin_field_control_update_cache_success1'=>'更新缓存成功',
    'admin_field_control_forbidden_success1'=>'设置成功',
    
    //index page
    'admin_field_index_page_title'=>'Field管理',
    'admin_field_index_page_tab1'=>'Model列表',
    'admin_field_index_page_tab2'=>'Field列表',
    'admin_field_index_page_tab3'=>'Field添加',
    'admin_field_index_page_tab4'=>'缓存更新',
    'admin_field_index_page_table_col_title1'=>'排序',
    'admin_field_index_page_table_col_title2'=>'Fid',
    'admin_field_index_page_table_col_title3'=>'说明',
    'admin_field_index_page_table_col_title4'=>'Field名',
    'admin_field_index_page_table_col_title5'=>'表名',
    'admin_field_index_page_table_col_title6'=>'类型',
    'admin_field_index_page_table_col_title7'=>'系统',
    'admin_field_index_page_table_col_title8'=>'必须',
    'admin_field_index_page_table_col_title9'=>'检索',
    'admin_field_index_page_table_col_title10'=>'投稿',
    'admin_field_index_page_table_col_title11'=>'操作',
    'admin_field_index_page_table_operator1'=>'修改',
    'admin_field_index_page_table_operator2'=>'禁止',
    'admin_field_index_page_table_operator3'=>'不禁止',
    'admin_field_index_page_table_operator4'=>'删除',
    'admin_field_index_page_confirm_del'=>'确定删除吗？',
    'admin_field_index_page_operator_sort'=>'排序',
    
    //add page
    'admin_field_add_page_title'=>'Field添加',
    'admin_field_add_page_tab1'=>'Model列表',
    'admin_field_add_page_tab2'=>'Field列表',
    'admin_field_add_page_tab3'=>'Field添加',
    'admin_field_add_page_form_title'=>'Field信息',
    'admin_field_add_page_form_item1'=>'类型',
    'admin_field_add_page_form_item1_option1'=>'单行文本',
    'admin_field_add_page_form_item1_option2'=>'多行文本',
    'admin_field_add_page_form_item1_option3'=>'数字',
    'admin_field_add_page_form_item1_option4'=>'选项',
    'admin_field_add_page_form_item1_option5'=>'编辑器',
    'admin_field_add_page_form_item1_option6'=>'图片',
    'admin_field_add_page_form_item1_option7'=>'多图片',
    'admin_field_add_page_form_item1_option8'=>'日期和时间',
    'admin_field_add_page_form_item1_option9'=>'文件',
    'admin_field_add_page_form_item1_option10'=>'外部数据',
    'admin_field_add_page_form_item1_option11'=>'树形数据選択',
    'admin_field_add_page_form_item2'=>'表',
    'admin_field_add_page_form_item2_message1'=>'字段所在表',
    'admin_field_add_page_form_item2_message2'=>'主表',
    'admin_field_add_page_form_item2_message3'=>'副表',
    'admin_field_add_page_form_item3'=>'Field标题',
    'admin_field_add_page_form_item3_message1'=>'例：文字标题',
    'admin_field_add_page_form_item4'=>'Field名',
    'admin_field_add_page_form_item4_message1'=>'必须为英文小写字母',
    'admin_field_add_page_form_item5'=>'Field提示',
    'admin_field_add_page_form_item6'=>'表单样式名',
    'admin_field_add_page_form_item6_message1'=>'定义表单的CSS样式名',
    'admin_field_add_page_form_item7'=>'字符长度取值范围',
    'admin_field_add_page_form_item7_message1'=>'系统将在表单提交时检测数据长度范围，如果不想限制长度请留空',
    'admin_field_add_page_form_item8'=>'表单验证',
    'admin_field_add_page_form_item8_message1'=>'系统将通过此正则校验表单提交的数据合法性，如果不想校验数据请留空',
    'admin_field_add_page_form_item8_option1'=>'常用正则',
    'admin_field_add_page_form_item8_option2'=>'数字',
    'admin_field_add_page_form_item8_option3'=>'整数',
    'admin_field_add_page_form_item8_option4'=>'字母',
    'admin_field_add_page_form_item8_option5'=>'数字+字母',
    'admin_field_add_page_form_item8_option6'=>'E-mail',
    'admin_field_add_page_form_item8_option7'=>'QQ',
    'admin_field_add_page_form_item8_option8'=>'超级链接',
    'admin_field_add_page_form_item8_option9'=>'手机号码',
    'admin_field_add_page_form_item8_option10'=>'电话号码',
    'admin_field_add_page_form_item8_option11'=>'邮政编码',
    'admin_field_add_page_form_item9'=>'必须输入',
    'admin_field_add_page_form_item9_message1'=>'如果表单必须设置值时选择‘YES’',
    'admin_field_add_page_form_item10'=>'错误提示',
    'admin_field_add_page_form_item10_message1'=>'输入内容不正确时的提示信息',
    'admin_field_add_page_form_item11'=>'值唯一',
    'admin_field_add_page_form_item12'=>'作为基本信息',
    'admin_field_add_page_form_item12_message1'=>'基本信息将在添加页面左侧显示',
    'admin_field_add_page_form_item13'=>'作为搜索条件',
    'admin_field_add_page_form_item14'=>'在前台投稿中显示',
    'admin_field_add_page_form_submit'=>'确定',
    
    
    //edit page
    'admin_field_edit_page_title'=>'Field修改',
    'admin_field_edit_page_tab1'=>'Model列表',
    'admin_field_edit_page_tab2'=>'Field列表',
    'admin_field_edit_page_tab3'=>'Field修改',
    'admin_field_edit_page_form_title'=>'Field信息',
    'admin_field_edit_page_form_item3'=>'Field标题',
    'admin_field_edit_page_form_item3_message1'=>'例：文字标题',
    'admin_field_edit_page_form_item5'=>'Field提示',
    'admin_field_edit_page_form_item6'=>'表单样式名',
    'admin_field_edit_page_form_item6_message1'=>'定义表单的CSS样式名',
    'admin_field_edit_page_form_item7'=>'字符长度取值范围',
    'admin_field_edit_page_form_item7_message1'=>'系统将在表单提交时检测数据长度范围，如果不想限制长度请留空',
    'admin_field_edit_page_form_item8'=>'表单验证',
    'admin_field_edit_page_form_item8_message1'=>'系统将通过此正则校验表单提交的数据合法性，如果不想校验数据请留空',
    'admin_field_edit_page_form_item8_option1'=>'常用正则',
    'admin_field_edit_page_form_item8_option2'=>'数字',
    'admin_field_edit_page_form_item8_option3'=>'整数',
    'admin_field_edit_page_form_item8_option4'=>'字母',
    'admin_field_edit_page_form_item8_option5'=>'数字+字母',
    'admin_field_edit_page_form_item8_option6'=>'E-mail',
    'admin_field_edit_page_form_item8_option7'=>'QQ',
    'admin_field_edit_page_form_item8_option8'=>'超级链接',
    'admin_field_edit_page_form_item8_option9'=>'手机号码',
    'admin_field_edit_page_form_item8_option10'=>'电话号码',
    'admin_field_edit_page_form_item8_option11'=>'邮政编码',
    'admin_field_edit_page_form_item9'=>'必须输入',
    'admin_field_edit_page_form_item9_message1'=>'如果表单必须设置值时选择‘YES’',
    'admin_field_edit_page_form_item10'=>'错误提示',
    'admin_field_edit_page_form_item10_message1'=>'输入内容不正确时的提示信息',
    'admin_field_edit_page_form_item11'=>'值唯一',
    'admin_field_edit_page_form_item12'=>'作为基本信息',
    'admin_field_edit_page_form_item12_message1'=>'基本信息将在添加页面左侧显示',
    'admin_field_edit_page_form_item13'=>'作为搜索条件',
    'admin_field_edit_page_form_item14'=>'在前台投稿中显示',
    'admin_field_edit_page_form_submit'=>'确定',
    
    //js 
    'admin_field_js_validate_message1'=>'Field标题必须输入',
    'admin_field_js_validate_message2'=>'不能输入特殊字母',
    'admin_field_js_validate_message3'=>'Field名必须输入',
    'admin_field_js_validate_message4'=>'请输入字母',
    'admin_field_js_validate_message5'=>'Field已经存在',
    'admin_field_js_update_cache_message1'=>'缓存更新成功',
    'admin_field_js_update_cache_message2'=>'缓存更新失败',
    'admin_field_js_del_field_message1'=>'删除成功',
    'admin_field_js_del_field_message2'=>'删除失敗',
    
    //field input
    'admin_field_input_add_th'=>'参数',
    'admin_field_input_add_item1'=>'显示长度',
    'admin_field_input_add_item2'=>'默认值',
    'admin_field_input_add_item3'=>'是否为密码',
    'admin_field_input_edit_th'=>'参数',
    'admin_field_input_edit_item1'=>'显示长度',
    'admin_field_input_edit_item2'=>'默认值',
    'admin_field_input_edit_item3'=>'是否为密码',
    'admin_field_input_validate_js_message1'=>'必须输入显示长度',
    'admin_field_input_validate_js_message2'=>'请输入数字。',
    
    //field textarea
    'admin_field_textarea_th'=>'参数',
    'admin_field_textarea_item1'=>'宽度',
    'admin_field_textarea_item2'=>'高度',
    'admin_field_textarea_item3'=>'默认值',
    'admin_field_textarea_validate_js_message1'=>'请输入数字。',
    
    //field number
    'admin_field_number_th'=>'参数',
    'admin_field_number_item1'=>'类型',
    'admin_field_number_item2'=>'整数位数',
    'admin_field_number_item3'=>'小数位数',
    'admin_field_number_item4'=>'显示长度',
    'admin_field_number_item5'=>'默认值',
    'admin_field_number_validate_js_message1'=>'请输入数字。',
    
    //field box
    'admin_field_box_th'=>'参数',
    'admin_field_box_item1'=>'选项列表',
    'admin_field_box_item1_message1'=>'选项值1|选项名称1',
    'admin_field_box_item2'=>'选项类型',
    'admin_field_box_item2_option1'=>'单选按钮',
    'admin_field_box_item2_option2'=>'复选框',
    'admin_field_box_item2_option3'=>'下拉框',
    'admin_field_box_item3'=>'默认值',
    'admin_field_box_validate_js_message1'=>'必须输入选项列表',
    'admin_field_box_validate_js_message2'=>'例：1|男,2|女',
    'admin_field_box_validate_js_message3'=>'请输入数字',
    
    //field editor
    'admin_field_editor_th'=>'参数',
    'admin_field_editor_item1'=>'高度',
    'admin_field_editor_item2'=>'默认值',
    'admin_field_editor_validate_js_message1'=>'必须输入高度',
    'admin_field_editor_validate_js_message2'=>'请输入数字',
    
    
    //field image
    'admin_field_image_th'=>'参数',
    'admin_field_image_item1'=>'图片最大宽度',
    'admin_field_image_item2'=>'图片最大高度',
    'admin_field_image_validate_js_message1'=>'请输入数字。',
    'admin_field_image_validate_js_message2'=>'px （上传图片超出尺寸将会自动裁剪）',
    
    //field images
    'admin_field_images_th'=>'参数',
    'admin_field_images_item1'=>'图片最大宽度',
    'admin_field_images_item2'=>'图片最大高度',
    'admin_field_images_item3'=>'允许上传的个数',
    'admin_field_images_item4'=>'图片名排序',
    'admin_field_images_validate_js_message1'=>'请输入数字。',
    'admin_field_images_validate_js_message2'=>'px （上传图片超出尺寸将会自动裁剪）',
    'admin_field_images_validate_js_message3'=>'个',
    
    //field datetime
    'admin_field_datetime_th'=>'参数',
    'admin_field_datetime_item1'=>'时间格式',
    'admin_field_datetime_item1_option1'=>'日期+24小时制时间（2013-11-19 05:10:27）',
    'admin_field_datetime_item1_option2'=>'日期（2013-11-19）',
    'admin_field_datetime_item1_option3'=>'时间（05:10:27）',
    
    //field files
    'admin_field_files_th'=>'参数',
    'admin_field_files_item1'=>'上传的个数',
    'admin_field_files_item2'=>'上传文件类型',
    'admin_field_files_validate_js_message1'=>'请输入数字。',
    'admin_field_files_validate_js_message2'=>'个',
    'admin_field_files_validate_js_message3'=>'上传文件类型不能为空',
    'admin_field_files_validate_js_message4'=>'上传文件类型用逗号分隔。例: zip,doc',
    'admin_field_files_validate_js_message5'=>'下载需要金币',
    
     //field exterior
    'admin_field_exterior_th'=>'参数',
    'admin_field_exterior_item1'=>'表',
    'admin_field_exterior_item2'=>'PK',
    'admin_field_exterior_item3'=>'显示项目',
    'admin_field_exterior_item4'=>'显示项目标题',
    'admin_field_exterior_item5'=>'检索条件',
    'admin_field_exterior_item6'=>'多选/单选',
    'admin_field_exterior_item6_option1'=>'多选',
    'admin_field_exterior_item6_option2'=>'单选',
    
    //field treeselect
    'admin_field_treeselect_th'=>'参数',
    'admin_field_treeselect_item1'=>'表',
    'admin_field_treeselect_item2'=>'显示 Field',
    'admin_field_treeselect_item3'=>'ID Field',
    
    
);
?>