require 'compass/import-once/activate'
require 'autoprefixer-rails'

http_path = "/"
css_dir = "../css"
sass_dir = "sass"
images_dir = "../images"
javascripts_dir = "javascripts"
output_style = :nested
relative_assets = true
line_comments = false
preferred_syntax = :sass

on_stylesheet_saved do |file|
  css = File.read(file)
  map = file + '.map'

  if File.exists? map
    result = AutoprefixerRails.process(css,
      from: file,
      to:   file,
      map:  { prev: File.read(map), inline: false })
    File.open(file, 'w') { |io| io << result.css }
    File.open(map,  'w') { |io| io << result.map }
  else
    File.open(file, 'w') { |io| io << AutoprefixerRails.process(css) }
  end
end
