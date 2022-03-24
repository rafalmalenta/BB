Feature: Seeing prduct color
    As a Visitor
    I want to be see product color

    Scenario: Seeing color
        Given the store has locale "en-US"
        And There is product with slug "dress" and color "czerwony"
        And I am on "/dress"
        Then I should see "red"


