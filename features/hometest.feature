Feature:
	In order to prove that Behat works as intended
	We want to test the home page for a phrase

Scenario: Home  Page
	Given I am on the homepage
	Then I should see "Laravel 5"

Scenario: Home Page
	When I go to homepage
	Then the url should match "/"
	And I can do something with laravel