css_dir = "css"
sass_dir = "scss"
images_dir = "img"
javascripts_dir = "js"
fonts_dir = "fonts"

output_style = :expanded
line_comments = true
color_output = false  

require 'fileutils'

on_stylesheet_saved do |file|
  if file.match('.min') == nil
    require 'compass'

    Compass.add_configuration(
        {
            :output_style => :compressed
        },
        'min' #ADDING A CONFIG REQUIRES A NAME
    )
    Compass.compiler.compile('scss/screen.scss', 'css/screen.min.css')
    #Compass.compiler is deprecated. Use Compass.sass_compiler instead.
    #Compass.sass_compiler('scss/screen.scss', 'css/screen.min.css')
    #yabbut, it dont work. the deprecated one does...

  end
end
