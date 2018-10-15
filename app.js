
R.assets( ['//public.zhfile.com/js/pack.hybrid.js', '//public.zhfile.com/js/pack.hybrid.css'], function(){

	var config = {
		debug : false,
		build : '20181012',
		baidu : 'f1b98dc11fa277428abfe5341b8ce61b',
		public : '//public.zhfile.com/',
		option : ( typeof option != 'undefined' ? option : {} ),
		extend : ( typeof extend != 'undefined' ? extend : {} )
	};
	Hybrid.Start( config );

} );
