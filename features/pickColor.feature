Feature: Picking color from select menu
    As a Administrator
    I want to be able pick product color
    Background:
        Given the store operates on a single channel in "United States"
    Scenario: Picking color
        Given the store has locale "en-US"
        And There is product with slug "dress" and color "czerwony"
        And I am on "/dress2"
        Then I should see "red"
