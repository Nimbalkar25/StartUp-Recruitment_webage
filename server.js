
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  modal.style.display = 'block';
  
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  modal.style.display = 'none';
}

function showJobList() {
  const jobList = document.getElementById('jobLinks');
  jobList.style.display = 'block';
}

function hideJobList() {
  const jobList = document.getElementById('jobLinks');
  jobList.style.display = 'none';
}

function scrollToWelcomeSection() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

function scrollToAboutUs() {
  const aboutUsSection = document.getElementById('aboutUsSection');
  aboutUsSection.scrollIntoView({ behavior: 'smooth' });
}
function preventDefaultClick(event) {
  event.preventDefault();
  event.stopPropagation();
}
// register


// backend
    // Hide success message after 2 seconds
    setTimeout(function() {
        var successMsg = document.getElementById('success-msg');
        if (successMsg) {
            successMsg.style.display = 'none';
        }
    }, 10000); // 5000 milliseconds = 1 seconds