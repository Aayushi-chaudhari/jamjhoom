// == Haeder Sticky JS ===
jQuery(window).scroll(function() {
    jQuery(this).scrollTop() > 10 ? jQuery(".site-header").addClass("sticky") : jQuery(".site-header").removeClass("sticky")
})
// == End Haeder Sticky JS ===

// == Mobile Toggle JS ===
jQuery(".mobile-toggle").click(function(){
    jQuery("body").toggleClass("mobile-open");
  });
// == End Mobile Toggle JS ===

// == Search Toggle JS ===
jQuery(".search-open").click(function(){
  jQuery(this).toggleClass("active");
  jQuery(".search-body").toggleClass("open");
});
jQuery(".search-close").click(function(){
  jQuery(".search-body").toggleClass("open");
});
// == End Search Toggle JS ===

//=== Video Play js
jQuery('.play-btn').click(function () {
  jQuery('video').trigger('play');
});
jQuery('.video-close').click(function () {
  jQuery('video').trigger('pause');
});
//=== JS Video Play js


jQuery(document).ready(function() {
  new WOW().init();
  // Attach click event to each thumbnail image
  jQuery(".thumbnail").click(function() {
    // Get the path of the clicked image
    var imagePath = jQuery(this).attr("src");
    
    // Update the right-side image viewer with the clicked image
    jQuery("#selected-image").attr("src", imagePath);
  });
});


// Email and other form validations
document.addEventListener("DOMContentLoaded", function() {
  var emailInput = document.getElementById('email');
  var fnameInput = document.getElementById('fname');
  var lnameInput = document.getElementById('lname');
  var subjectInput = document.getElementById('subject');
  var submitButton = document.getElementById('submitButton');
  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

  submitButton.addEventListener('click', function(event) {
      var hasErrors = false;

      // Clear previous error messages
      clearErrors();

      if (emailInput.value.trim() === '') {
          document.getElementById('emailError').innerHTML = 'Please enter an email address.';
          hasErrors = true;
      } else if (!emailPattern.test(emailInput.value)) {
          document.getElementById('emailError').innerHTML = 'Please enter a valid email address.';
          hasErrors = true;
      }

      if (fnameInput.value.trim() === '') {
          document.getElementById('fnameError').innerHTML = 'Please enter your first name.';
          hasErrors = true;
      }

      if (lnameInput.value.trim() === '') {
          document.getElementById('lnameError').innerHTML = 'Please enter your last name.';
          hasErrors = true;
      }

      if (subjectInput.value.trim() === '') {
          document.getElementById('subjectError').innerHTML = 'Please enter a subject.';
          hasErrors = true;
      }

      if (hasErrors) {
          event.preventDefault(); // Prevent form submission
      }
  });

  function clearErrors() {
      document.getElementById('emailError').innerHTML = '';
      document.getElementById('fnameError').innerHTML = '';
      document.getElementById('lnameError').innerHTML = '';
      document.getElementById('subjectError').innerHTML = '';
  }
});

// Read more toggle list js

$(document).ready(function() {
  // Hide the full content initially
  $(".full-content").hide();

  // Add click event handler for the common "Read More" button
  $(".read-more-link").click(function(e) {
      e.preventDefault();
      // Hide the content and show the full content
      $(".content").hide();
      $(".full-content").show();

      // Hide the "Read More" button and show the "Read Less" button
      $(this).hide();
      $(".read-less-link").show();
  });

  // Add click event handler for the common "Read Less" button
  $(".read-less-link").click(function(e) {
      e.preventDefault();
      // Hide the full content and show the content
      $(".full-content").hide();
      $(".content").show();

      // Hide the "Read Less" button and show the "Read More" button
      $(this).hide();
      $(".read-more-link").show();
  });
});


// jQuery(document).ready(function($) {
//   // Get the current URL
//   var currentUrl = window.location.href;

//   // Loop through each menu item
//   $('.menu-item').each(function() {
//       var menuItemUrl = $(this).find('a').attr('href');

//       // Check if the current URL contains the menu item's URL
//       if (currentUrl.indexOf(menuItemUrl) !== -1) {
//           $(this).addClass('current-menu-item');
//       }
//   });
// });