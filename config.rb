#
# This file is only needed for Compass/Sass integration. If you are not using
# Compass, you may safely ignore or delete this file.
#
# If you'd like to learn more about Sass and Compass, see the sass/README.txt
# file for more information.
#

Sass::Script::Number.precision = 8

# Require any additional compass plugins here.


# Change this to :production when ready to deploy the CSS to the live server.
environment = :development
#environment = :production


# In development, we can turn on the FireSass-compatible debug_info.
firesass = false
#firesass = true


# Location of resources.
css_dir         = "/css"
sass_dir        = "/scss"
images_dir      = "/images"


##
## You probably don't need to edit anything below this.
##

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
output_style = (environment == :development) ? :expanded : :compressed


# To enable relative paths to assets via compass helper functions. Since Drupal
# themes can be installed in multiple locations, we don't need to worry about
# the absolute path to the theme from the server root.
relative_assets = false


# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false


# Pass options to sass. For development, we turn on the FireSass-compatible
# debug_info if the firesass config variable above is true.
sass_options = (environment == :development && firesass == true) ? {:debug_info => true} : {}