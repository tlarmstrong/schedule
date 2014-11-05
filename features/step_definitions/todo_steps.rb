=begin 

Given(/^there are no current schedule conflicts with inputted CRN$/) do
  pending # express the regexp above with the code you wish you had
end

When(/^I inputted (\d+), (\d+) (\d+)\-(\d+) (\d+), Monday \(checked\), Wednesday\(checked\), Friday \(checked\)$/) do |arg1, arg2, arg3, arg4, arg5|
  pending # express the regexp above with the code you wish you had
end

Then(/^the variables \(CRN, beg_time, end_time, days\[i\]\) should have (\d+), (\d+) (\d+),(\d+) (\d+), \[Monday Wednesday Friday\] respectively$/) do |arg1, arg2, arg3, arg4, arg5|
  pending # express the regexp above with the code you wish you had
end

Given(/^database of student schedules$/) do
  pending # express the regexp above with the code you wish you had
end

Given(/^course catalogue$/) do
  pending # express the regexp above with the code you wish you had
end

When(/^user inputs course number and testing time and day$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^new screen appears dictating no conflicts with the option of viewing the calendar grid of severities$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^The time block specified will be outlined and shaded white to dictate no severity$/) do
  pending # express the regexp above with the code you wish you had
end

Given(/^catalogue year$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^new screen appears with calendar grid, with every grid either white, green, yellow, orange, or red$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^The time block specified will be outlined and shaded yellow to dictate a low severity$/) do
  pending # express the regexp above with the code you wish you had
end

Given(/^graduation date$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^The time block specified will be outlined and shaded orange to dictate a high severity$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^The time block specified will be outlined and shaded red to dictate the highest severity$/) do
  pending # express the regexp above with the code you wish you had
end

Given(/^database of student schedules, course catalogue, and catalogue year$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^new screen appears with calendar grid, with every grid either white, green, yellow, orange, or red\. The time block specified will be outlined and shaded yellow to dictate a low severity$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^new screen appears with calendar grid with every grid either white, green, yellow, orange, or red dictate a very low severity$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^The time block specified will be outlined and shaded green to dictate a very low severity$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^The time block specified will be outlined and shaded the color of the highest severity amongst the students$/) do
  pending # express the regexp above with the code you wish you had
end

=end

#DATABASE CONNECTION

Given(/^I am connected to a database$/) do
  establish_db_connection
end

#USER AUTHENTICATION
Given(/^user is on login page$/) do
  visit 'http://localhost/schedule/'
end

Given(/^user types correct username$/) do
  email = 'wlg11a'
  fill_in 'username', :with => email
end

Given(/^user types correct password$/) do
  password = 'pass'
  fill_in 'password', :with => password
end

Given(/^user clicks the login button$/) do
  click_button 'Login'
end

Then(/^the user logs into the system$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^scheduler view page should display$/) do
  pending # express the regexp above with the code you wish you had
end

Given(/^user types some password$/) do
  pending # express the regexp above with the code you wish you had
end
Then(/^page returns invalid username or password error$/) do
  pending # express the regexp above with the code you wish you had
end

Given(/^user types some username$/) do
  pending # express the regexp above with the code you wish you had
end

Given(/^user types username$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^page no specified username error$/) do
  pending # express the regexp above with the code you wish you had
end

Given(/^user types password$/) do
  pending # express the regexp above with the code you wish you had
end

Then(/^page no specified password error$/) do
  pending # express the regexp above with the code you wish you had
end
