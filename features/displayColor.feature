Feature: Seeing product color
    As a Visitor
    I want to be see product color
    Background:
        Given the store operates on a single channel in "United States"

    Scenario: Seeing color
        Given the store has locale "en-US"
        And There is product with slug "dress" and color "czerwony"
        And I am on "/en_US/products/dress"
        Then I should see "red"


