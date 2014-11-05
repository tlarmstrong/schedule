require 'rubygems'
require "mysql"

# simple functions to get at the number of currently running processes
# on a mysql server
def establish_db_connection()
  @host = '127.0.0.1'
  @username = ''
  @password = ''

  my = Mysql.connect(@host, @username, @password)
  res = my.query('SHOW DATABASES;')
  puts res # need to be converted to string 
  puts "Tables_in_valutation"
  res.each {|x| p x.to_s}
  res.free
end
