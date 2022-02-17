# Horizon - The Virtual Classroom

Pandemic has caused the education sector to look into new possibilities and new interactive methods. We aim at providing a new platform to make education online, more efficient with a lot of fun and extra curricular activities. We give emphasis on a social media inspired education web app, a virtual classroom that can help students as well as teachers learn ,teach and conduct exams in a single platform!

# WEAVY Features:

<p>We can also embed an interactive feed using Weavy Activity Feeds so that the students can upload their extra curricular activities such as poem writing, essay writing, short story writing, etc. Thus enhancing the non-scholastic activity. There will be an integrated zoom which can be easily integrated using weavy.</p> The secure file sharing features enable as to develop a secure platform for transferring question papers with the students and answers from students without any third party api. The chat feature enables students to communicate with their teachers and also with other students. As there will be tasks assigned to all students, these can be easily done using the Weavy Tasks feature.

## INSTALLATION STEPS

Installing Apache Server for local hosting:

1. Download and Install XAMPP in your local machine.
2. Download and Extract the code to htdocs in xampp folder.
3. Start the apache server and go to ``` localhost/{name of the folder}``` 

For public hosting:
1. Deploy this code on a PHP Environment
2. Deploy Weavy Instance as seperate. Use reference docs for more steps
3. Connect to a SQL DB
## Integrating Weavy framework to webapp

For working with weavy make sure you have a weavy instance either locally or in azure and must be up and running.

In order to add weavy features, we need to include a js file, create a space and add the necessary code for connection. Add some css so that it is viewable from the browser. An example code is pined below

    var space = weavy.space({key: "global" });
    
    // get or create the feeds
    var feeds = space.app({ key: "feeds", type: "posts", container: "#feed-container" });
    
    // get or create the task
    var tasks = space.app({ key: "tasks", type: "tasks", container: "#tasks-container" });

    // get or create the messenger app
    var messengerApp = space.app({key: "main-messenger", type: "messenger", container: "#weavy-messenger-container" });
 

Also you need to provide JWT for working. 
<br>You can refer https://docs.weavy.com/client/authentication for more details about authentication.

## SCREENSHOTS OF THE PROJECT

## Index

![index page](https://user-images.githubusercontent.com/70442264/132801685-080b531a-83f1-4515-9a64-6c35403208f4.png)

## Teacher Dashboard

![teacher-dashboard](https://user-images.githubusercontent.com/70442264/132801722-e2238259-d9bf-4051-9d72-c41034865774.png)

## Student Dashboard

![student dashboard](https://user-images.githubusercontent.com/70442264/132801747-a995ee0a-3b28-4c5f-a68d-4fdfb3fd71ed.png)


## References
For more details about weavy visit https://www.weavy.com/

For documentation about weavy visit https://docs.weavy.com/

# Hackthon:
This project was developed for the Build Tomorrow 2021 Hackathon by Weavy . 
<br>This project won the second prize for the  Build Tomorrow 2021 Hackathon by Weavy under the theme : "Education".
<br> Reference :[BUILD TOMMOROW HACKATHON 2021 by Weavy and HackerEarth](https://www.hackerearth.com/challenges/hackathon/build-tomorrow-a-weavy-hackathon/)
<br> Articles : https://www.weavy.com/developer/hackathons/buildtmr21-the-inevitables 
