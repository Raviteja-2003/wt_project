<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Custom Styles */
        body {
    background-image: url('');
    background-size: cover;
    background-attachment: fixed;
    background-position: left;
}
        .details{
             padding: 30px;
            /* border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); */
        }
        .form-group label {
            color: green;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: green;
            border-color: #0056b3;
        }
       
.form{
    max-width: 800px; /* Adjust the max-width as needed */
    margin: 0px auto ;
    padding: 20px;
    /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); */
    color:green;
}
.form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
}
    </style>
    <title>Portfolio Form</title>
</head>
<body >
    <div class="form">
        <h1 class="mt-4 mb-4" align="center">Portfolio Form</h1>
        <form action="index.php" method="post" enctype="multipart/form-data" class="details">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact details</label>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="ravi@gmail.com" required>
            </div>
            <div class="form-group">
            <label for="linkedin">LinkedIn Profile:</label>
           <input type="url" class="form-control" name="linkedin" placeholder="https://www.linkedin.com/in/yourusername" required>
            </div>
           <div class="from-group">
               <label for="phone">Mobile Number:</label>
                <input type="number" class="form-control" id="mobile" required>
           </div>
            <div class="form-group">
                <label for="education">Education:</label>
                <textarea class="form-control" name="education" rows="4" required></textarea>
            </div>
           
            <div class="form-group">
                <label for="numberOfSkills">Number of Skills:</label>
                <input type="number" class="form-control" id="numberOfSkills" min="1" required>
            </div>
            <button type="button" class="btn btn-primary" id="generateSkillsBtn">Generate Skills</button>
        <div id="skillsContainer" class="mt-3"></div>
            <div class="form-group">
                <label for="numberOfProjects">Number of Projects:</label>
                <input type="number" class="form-control" id="numberOfProjects" min="1" required>
            </div>
            <button type="button" class="btn btn-primary mb-3" id="generateProjectsBtn">Generate Projects</button>
            
            <div id="projectsContainer"></div>
            <div class="form-group">
                <label for="role">Role:</label>
                <input type="text" class="form-control" id="role" placeholder="Ex:-Front-end developer" required>
            </div>
            <div class="form-group">
                <label for="experience">Experience:</label>
                <textarea class="form-control" id="experience" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Upload Photo:</label>
                <input type="file" class="form-control-file" name="photo" accept="image/*" >
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    

    <!-- Include Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById("generateSkillsBtn").addEventListener("click", function() {
            const numberOfSkills = parseInt(document.getElementById("numberOfSkills").value);
            const skillsContainer = document.getElementById("skillsContainer");
            skillsContainer.innerHTML = ""; // Clear previous content

            for (let i = 1; i <= numberOfSkills; i++) {
                const skillInput = document.createElement("input");
                skillInput.type = "text";
                skillInput.className = "form-control mb-2";
                skillInput.placeholder = `Skill ${i}`;
                skillInput.name = `skill${i}`;
                skillsContainer.appendChild(skillInput);
            }
        });
        document.getElementById("generateProjectsBtn").addEventListener("click", function() {
            const numberOfProjects = parseInt(document.getElementById("numberOfProjects").value);
            const projectsContainer = document.getElementById("projectsContainer");
            projectsContainer.innerHTML = ""; // Clear previous content

            for (let i = 1; i <= numberOfProjects; i++) {
                const projectDiv = document.createElement("div");
                projectDiv.className = "form-group";
                
                const projectNameInput = document.createElement("input");
                projectNameInput.type = "text";
                projectNameInput.className = "form-control mb-2";
                projectNameInput.placeholder = `Project ${i} Name`;
                projectNameInput.name = `projectName${i}`;
                
                const projectLinkInput = document.createElement("input");
                projectLinkInput.type = "text";
                projectLinkInput.className = "form-control mb-2";
                projectLinkInput.placeholder = `GitHub Link for Project ${i}`;
                projectLinkInput.name = `projectLink${i}`;
                
                projectDiv.appendChild(projectNameInput);
                projectDiv.appendChild(projectLinkInput);
                
                projectsContainer.appendChild(projectDiv);
            }
        });
    </script>
</body>
</html>
