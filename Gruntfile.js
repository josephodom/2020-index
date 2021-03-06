module.exports=function(grunt){
	const sass=require('node-sass');
	
	grunt.initConfig({
		pkg:grunt.file.readJSON('package.json'),
		
		cssmin:{
			target:{
				files:[
					{
						expand:true,
						cwd:'css/',
						src:['*.css','!*.min.css'],
						dest:'css/',
						ext:'.min.css'
					},
					
					{
						expand:true,
						cwd:'css/',
						src:['*.css','!*.min.css'],
						dest:'css/',
						ext:'.min.css'
					},
				]
			}
		},
		
		sass:{
			options:{
				implementation:sass,
				sourceMap:true,
			},
			
			dist:{
				files:[
					{
						expand:true,
						cwd:'sass/',
						src:['*.sass','*.scss','!*.css'],
						dest:'css/',
						ext:'.css'
					},
					
					{
						expand:true,
						cwd:'sass/',
						src:['*.sass','*.scss','!*.css'],
						dest:'css/',
						ext:'.css'
					},
				],
			},
		},
		
		watch:{
			css:{
				files:[
					'**/*.sass',
					'^**/_*.sass',
					'**/*.scss',
					'^**/_*.scss',
					'**/*.css?',
				],
				tasks:['sass','cssmin']
			},
		},
	});
	
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
	
	grunt.registerTask('default',['watch']);
};