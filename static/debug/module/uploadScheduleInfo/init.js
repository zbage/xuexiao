define(function(require,exports){
	// 获取上传后的数据
	if($("#moduleId").attr('check')){
		seajs.use('module/uploadScheduleInfo/getJson');
	};
	// 上传成功后返回数据
	if($("#moduleId").attr('scheduleFile')){
		seajs.use('module/uploadScheduleInfo/scheduleFile');
	};
	
	// 录入信息
	require('module/uploadScheduleInfo/entry');
})
