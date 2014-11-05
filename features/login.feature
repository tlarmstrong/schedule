Feature: The user should be able to log into the system.

    Scenario: User submits correct username and password
        Given user is on login page
        And user types correct username
        And user types correct password
        And user clicks the login button
        Then the user logs into the system
        Then scheduler view page should display

    Scenario: User submits incorrect username 
        Given user is on login page
        And user types correct username
        And user types some password
        And user clicks the login button
        Then page returns invalid username or password error

    Scenario: User submits incorrect password 
        Given user is on login page
        And user types some username
        And user types correct password
        And user clicks the login button
        Then page returns invalid username or password error

    Scenario: User submits password and no username
        Given user is on login page
        And user types username
        And user clicks the login button
        Then page no specified username error

    Scenario: User submits username and no password
        Given user is on login page
        And user types password
        And user clicks the login button
        Then page no specified password error
