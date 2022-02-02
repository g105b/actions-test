Feature: Get greeted
	In order to use the greeting feature
	As a visitor
	The homepage should politely greet me

	Scenario: I am greeted by default
		Given I am on the homepage
		Then I should see "Hello, you!"
