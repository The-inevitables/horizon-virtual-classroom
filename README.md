# Horizon - The Virtual Classroom

Pandemic has caused the education sector to look into new possibilities and new interactive methods. We aim at providing a new platform to make education online, more efficient with a lot of fun and extra curricular activities. We give emphasis on a social media inspired education web app, a virtual classroom that can help students as well as teachers learn ,teach and conduct exams in a single platform!

#WEAVY Features:

We can also embed an interactive feed using Weavy Activity Feeds so that the students can upload their extra curricular activities such as poem writing, essay writing, short story writing, etc. thus enhancing the non-scholastic activity. There will be an integrated zoom which can be easily integrated using weavy. The secure file sharing features enable as to develop a secure platform for transferring question papers with the students and answers from students without any third party api. The chat feature enables students to communicate with their teachers and also with other students. As there will be tasks assigned to all students, these can be easily done using the Weavy Tasks feature.

## INSTALLATION

Local Install:

Download and Install XAMPP in your local machine.
Download and Extract the code to htdocs in xampp folder.
Start the apache server and go to ``` localhost/{name of the folder}``` 

## DEPLOYMENT

[HORIZON](https://horizon-vclass.azurewebsites.net)

[Weavy Instance](https://horizond.azurewebsites.net/)

## Index

![index page](https://user-images.githubusercontent.com/70442264/132801685-080b531a-83f1-4515-9a64-6c35403208f4.png)

## Teacher Dashboard

![teacher-dashboard](https://user-images.githubusercontent.com/70442264/132801722-e2238259-d9bf-4051-9d72-c41034865774.png)

## Student Dashboard

![student dashboard](https://user-images.githubusercontent.com/70442264/132801747-a995ee0a-3b28-4c5f-a68d-4fdfb3fd71ed.png)

## Weavy to App

For working with weavy make sure you have a weavy instance either locally or in azure and must be up and running.

In order to add weavy features, we need to include a js file and create a space and add the necessary code for connection. Add some css so that it is viewable from the browser. An example code is pined below

  ```var space = weavy.space({key: "global" });
    
    // get or create the feeds
    var feeds = space.app({ key: "feeds", type: "posts", container: "#feed-container" });
    
    // get or create the task
    var tasks = space.app({ key: "tasks", type: "tasks", container: "#tasks-container" });

    // get or create the messenger app
    var messengerApp = space.app({key: "main-messenger", type: "messenger", container: "#weavy-messenger-container" });```

