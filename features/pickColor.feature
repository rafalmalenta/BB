Feature: Picking color from select menu
    As a Administrator
    I want to be able pick product color
    Background:
        Given the store operates on a single channel in "United States"
    Scenario: Picking color
        Given I am logged in as an administrator
        And I am on "/admin/products/new/simple"
        Then I should see select menu with option "Red"
        Then I should see select menu with option "Green"
        Then I should see select menu with option "Blue"
