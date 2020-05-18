
R.assets( ['//public.rexcdn.com/js/pack.hybrid.css', '//public.rexcdn.com/js/pack.hybrid.js'], function(){

	var config = {
		debug : false,
		build : '20181012',
		baidu : 'f1b98dc11fa277428abfe5341b8ce61b',
		google : 'UA-279570-6',
		public : '//public.zhfile.com/',
		option : ( typeof option != 'undefined' ? option : {} ),
		extend : ( typeof extend != 'undefined' ? extend : {} )
	};
	Hybrid.Start( config );

} );
