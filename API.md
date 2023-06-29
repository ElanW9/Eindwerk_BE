## Authentication

# Login

URL: /login
Method: POST
Description: Allows a user to authenticate and receive an access token.
Request Body:
None

# Logout

URL: /logout
Method: POST
Description: Logs out the currently authenticated user and revokes their access token.
Request Body:
None

## User

# Get User

URL: /user
Method: GET
Description: Retrieves the currently authenticated user's information.
Request Body:
None

## Fighters

# All Fighters

URL: /fighters
Method: GET
Description: Retrieves a list of all fighters.
Request Body:
None

# Create Fighter

URL: /fighters
Method: POST
Description: Creates a new fighter.
Request Body:
Required fields:
name: The name of the fighter.
age: The age of the fighter.
weight: The weight of the fighter.
height: The height of the fighter.
experience: The experience of the fighter.

# Get Fighter

URL: /fighters/{fighter}
Method: GET
Description: Retrieves detailed information about a specific fighter.
Request Body:
None

# Update Fighter

URL: /fighters/{fighter}
Method: PUT
Description: Updates information for a specific fighter.
Request Body:
Required fields:
name: The updated name of the fighter.
age: The updated age of the fighter.
weight: The updated weight of the fighter.
Delete Fighter
URL: /fighters/{fighter}
Method: DELETE
Description: Deletes a specific fighter.
Request Body:
None

## Martial Arts

# All Martial Arts

URL: /martial_arts
Method: GET
Description: Retrieves a list of all martial arts.
Request Body:
None

# Get Martial Art

URL: /martial_arts/{martial_art}
Method: GET
Description: Retrieves detailed information about a specific martial art.
Request Body:
None

## Images

# All Images

URL: /images
Method: GET
Description: Retrieves a list of all images.
Request Body:
None

# Get Image

URL: /images/{image}
Method: GET
Description: Retrieves detailed information about a specific image.
Request Body:
None
