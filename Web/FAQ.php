
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
    
    <style>

@import url('https://fonts.googleapis.com/css?family=Hind:300,400&display=swap');
* {
  box-sizing: border-box;
}
*::before,
*::after {
  box-sizing: border-box;
}
body {
  margin: 0;
  padding: 0px;
  font-family: 'Hind', sans-serif;
  background: radial-gradient(circle at -8.9% 51.2%, rgb(255, 124, 0) 0%, rgb(255, 124, 0) 15.9%, rgb(255, 163, 77) 15.9%, rgb(255, 163, 77) 24.4%, rgb(19, 30, 37) 24.5%, rgb(19, 30, 37) 66%);
  
  color: #4d5974;
  display: flex;
  min-height: 100vh;
 
}
.container {
  margin: 0 auto;
  padding: 4rem;
  width: 48rem;
}
.accordion .accordion-item {
  border-bottom: 1px solid #e5e5e5;
}
.accordion .accordion-item button[aria-expanded='true'] {
  border-bottom: 1px solid #03b5d2;
}
.accordion button {
  position: relative;
  display: block;
  text-align: left;
  width: 100%;
  padding: 1em 0;
  color: #7288a2;
  font-size: 1.15rem;
  font-weight: 400;
  border: none;
  background: none;
  outline: none;
}
.accordion button:hover,
.accordion button:focus {
  cursor: pointer;
  color: #03b5d2;
}
.accordion button:hover::after,
.accordion button:focus::after {
  cursor: pointer;
  color: #03b5d2;
  border: 1px solid #03b5d2;
}
.accordion button .accordion-title {
  padding: 1em 1.5em 1em 0;
}
.accordion button .icon {
  display: inline-block;
  position: absolute;
  top: 18px;
  right: 0;
  width: 22px;
  height: 22px;
  border: 1px solid;
  border-radius: 22px;
}
.accordion button .icon::before {
  display: block;
  position: absolute;
  content: '';
  top: 9px;
  left: 5px;
  width: 10px;
  height: 2px;
  background: currentColor;
}
.accordion button .icon::after {
  display: block;
  position: absolute;
  content: '';
  top: 5px;
  left: 9px;
  width: 2px;
  height: 10px;
  background: currentColor;
}
.accordion button[aria-expanded='true'] {
  color: #03b5d2;
}
.accordion button[aria-expanded='true'] .icon::after {
  width: 0;
}
.accordion button[aria-expanded='true'] + .accordion-content {
  opacity: 1;
  max-height: 9em;
  transition: all 200ms linear;
  will-change: opacity, max-height;
}
.accordion .accordion-content {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  transition: opacity 200ms linear, max-height 200ms linear;
  will-change: opacity, max-height;
}
.accordion .accordion-content p {
  font-size: 1rem;
  font-weight: 300;
  margin: 2em 0;
}
      </style>
  </head>
  <body>
  <?php
   //include_once'header.php';//
?>
  
    <div class="container">
      <h2>Frequently Asked Questions (FAQ)</h2>
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">How do I submit a change order request?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            To submit a change order request, log in to your account and navigate to the project dashboard. Locate the change order section
             and click on the "Submit Change Order" button. Fill in the necessary details, including the reason for the change, 
            proposed modifications, and any relevant documentation. Submit the request, and it will be reviewed by the project manager.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false">
            <span class="accordion-title"> Can I track the project's schedule and milestones?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            Yes, you can track the project's schedule and milestones within the Construction Management System.
             The system provides a Gantt chart or timeline view where you can see the project's overall schedule, key milestones
             , and dependencies. You can also access detailed 
            task information, including start and end dates, assigned resources, and task dependencies.
            
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">How can I communicate with the project team and stakeholders?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            The Construction Management System offers various communication tools to interact with the project team and stakeholders.
             You can use the built-in messaging feature to send direct messages to team members or create group chats for specific project 
             discussions. Additionally, the system may provide a comment 
            section where you can post updates, share files, and receive feedback from stakeholders.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false">
            <span class="accordion-title">What safety measures should be followed on the construction site?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            Safety is a top priority on construction sites. It's important to follow established safety protocols and guidelines.
            These may include wearing personal protective equipment (PPE), conducting regular safety inspections, providing safety 
            training to workers, maintaining a clean and organized work environment, and adhering to local safety regulations. Always consult the project's
             safety officer for specific guidelines and requirements.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title"> How can I report an issue or problem on the construction site?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            If you encounter an issue or problem on the construction site, report it promptly to the project manager or relevant personnel.
             Depending on the system's features, you may find a dedicated "Issue Reporting" or "Incident Management" section where you can document 
             the problem, attach photos if necessary, and provide additional details. This ensures that issues are addressed and resolved in a timely manner.
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <script>

const items = document.querySelectorAll('.accordion button');
function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}
items.forEach((item) => item.addEventListener('click', toggleAccordion));
      </script>
  </body>
</html>