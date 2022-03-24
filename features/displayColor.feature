Feature: Seeing prduct color
    As a Visitor
    I want to be see product color

    Scenario: Seeing color
        Given There is product with slug "dress"
        And has color "czerwony"
        Then I should see "red"


