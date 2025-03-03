document.addEventListener("DOMContentLoaded", function() {
   const hamburger = document.querySelector('.hamburger');
   const menuBtn = document.querySelector('.menu-btn');
   const bottomRightdiv = document.querySelector('.bottom-rightdiv');
   
   // Toggle the 'open' class on the hamburger menu and 'showing' class on bottom-right content
   hamburger.addEventListener('click', function() {
       // Toggle 'open' class for hamburger animation
       menuBtn.classList.toggle('open');
       
       // Toggle 'showing' class to display bottom-right content
       bottomRightdiv.classList.toggle('showing');
   });
});