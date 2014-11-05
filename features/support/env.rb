






=begin 

require 'rspec/expectations'
require 'capybara'
require 'capybara/mechanize'
require 'capybara/cucumber'
require 'test/unit/assertions'
require 'mechanize'
#require 'capybara/mechanize/cucumber'


World(Test::Unit::Assertions)

Capybara.default_driver = :mechanize
#Capybara.app_host = "http://localhost"
Capybara.run_server = false
Capybara.app_host = "https://www.google.com/"
World(Capybara)

=end

require "bundler/setup"
 
require 'capybara/mechanize'
require 'capybara/cucumber'
 
Capybara.app = "http://www.google.de"
Capybara.run_server = false
Capybara.app_host = 'http://www.google.de'
Capybara.default_selector = :css
Capybara.default_driver = :mechanize
# Capybara.default_driver = :selenium
