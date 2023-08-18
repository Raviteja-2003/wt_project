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
        /* Reset some default styles */
/* Reset and general styles */
/* Reset and general styles */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
}

/* Container styles */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    /* background-color: #00f245; Set the background color */
}

.form {
    background-color: white;
    padding: 20px; /* Adjust padding for smaller screens */
    border-radius: 10px;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

/* Form element styles */
.form-title {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 15px; /* Adjust margin for smaller screens */
}

.form-label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    color: #333;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #00f245; /* Set focus border color */
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #188153; /* Set button background color */
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #009c31; /* Set button hover color */
}

/* Media queries for responsiveness */
@media (max-width: 768px) {
    .form {
        padding: 15px;
    }

    .form-group {
        margin-bottom: 10px;
    }

    .btn {
        padding: 8px 15px;
    }
}


        
    </style>
    <title>Portfolio Form</title>
</head>
<body >
    
<div class="container">
        <div class="form">
            <h1 class="form-title">Portfolio Form</h1>
            <form action="portfolio.php" method="post" enctype="multipart/form-data">
            <div class = "details">
            <h1 class="mt-4 mb-4" >Portfolio Form</h1>
            <form action="portfolio.php" method="post" enctype="multipart/form-data" class="details">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input id="userName" type="text" class="form-control" name="userName" required>
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <input  id="userRole" type="text" class="form-control" name="userRole" placeholder="Ex:-Front-end developer" required>
                </div>
                <div class="form-group">
                    <h2 for="contact">Contact details</h2>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="userEmail" type="email" class="form-control" name="userEmail" placeholder="example@gmail.com" required>
                </div>
                <div class="form-group">
                <label for="linkedin">LinkedIn Profile:</label>
                <input id="userUrl" type="url" class="form-control" name="userUrl" placeholder="https://www.linkedin.com/in/yourusername" required>
                </div>
                <div class="form-group">
                <label for="github">GitHub Profile:</label>
                <input id="gitUrl" type="url" class="form-control" name="gitUrl" placeholder="https://github.com/username" required>
                </div>
                <div class="from-group">
                <label for="phone">Mobile Number:</label>
                <input id="userPhone" type="number" class="form-control" name="userPhone" required>
                </div>
                <div class="form-group">
                <label for="education">Education:</label>
                <textarea id="userEducation" class="form-control" name="userEducation" rows="4" required></textarea>
                </div>
                <div class="form-group">
                <label for="about">About:</label>
                <textarea id="userAbout" class="form-control" name="userAbout" rows="4" required></textarea>
                </div>
            
                <div class="form-group">
                <label for="numberOfSkills">Number of Skills:</label>
                <input type="number" class="form-control" id="numberOfSkills" name="numberOfSkills" min="1" required>
                </div>
                <button type="button" class="btn btn-primary" id="generateSkillsBtn">Generate Skills</button>
                <div id="skillsContainer" name="skillsContainer" class="mt-3"></div>
                <div class="form-group">
                <label for="numberOfProjects">Number of Projects:</label>
                <input type="number" class="form-control" id="numberOfProjects" name="numberOfProjects" min="1" max="3" required>
                </div>
                <button type="button" class="btn btn-primary mb-3" id="generateProjectsBtn">Generate Projects</button>
            
                <div id="projectsContainer" name="projectsContainer"></div>
                
                <div class="form-group">
                <label for="experience">Experience:</label>
                <textarea id="userExperience" class="form-control" name="userExperience" rows="4" required></textarea>
                </div>

                <!-- <div class="form-group">
                    <label for="photo">Upload Photo:</label>
                    <input type="file" class="form-control-file" name="photo" accept="image/*" >
                </div> -->
            
                
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
        <!-- </div>
    </div> -->
    
    

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
                skillInput.name = `userSkill${i}`;
                skillsContainer.appendChild(skillInput);
            }
        });
        document.getElementById("generateProjectsBtn").addEventListener("click", function() {
            const numberOfProjects = parseInt(document.getElementById("numberOfProjects").value);
            const projectsContainer = document.getElementById("projectsContainer");
            projectsContainer.innerHTML = ""; // Clear previous content

            if (numberOfProjects > 3) {
                alert("Maximum 3 projects allowed");
                return;
            } else  {
                for (let i = 1; i <= numberOfProjects; i++) {
                const projectDiv = document.createElement("div");
                projectDiv.className = "form-group";
                
                const projectNameInput = document.createElement("input");
                projectNameInput.type = "text";
                projectNameInput.className = "form-control mb-2";
                projectNameInput.placeholder = `Project ${i} Name`;
                projectNameInput.name = `userProjectName${i}`;
                
                const projectLinkInput = document.createElement("input");
                projectLinkInput.type = "text";
                projectLinkInput.className = "form-control mb-2";
                projectLinkInput.placeholder = `GitHub Link for Project ${i}`;
                projectLinkInput.name = `userProjectLink${i}`;
                
                projectDiv.appendChild(projectNameInput);
                projectDiv.appendChild(projectLinkInput);
                
                projectsContainer.appendChild(projectDiv);
            }
            }
        });
    </script>
</body>
</html>
