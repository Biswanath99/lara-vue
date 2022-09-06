(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });

})(jQuery); // End of use strict

//Table with search
$(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
});

PDFObject.embed("http://srkptechnologies.com/demo-pdf/agreement-demo-doc.pdf", "#pdf-viewer");

// /* For remove rows */
// $("#delete-row-1").click(function() {
//   $(".add-donation tbody").find('input[name="record"]').each(function() {
//       if ($(this).is(":checked")) {
//           $(this).parents("tr").remove();
//       }
//   });
// });


/* For add new donation */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-sm color-mg'><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder=' ' /></div></td><td class='text-nowrap'><div class='form-group mt-1'><select class='form-control form-control-sm ad-dn color-mg'><option value='0' selected>Choose one</option><option value='1'>PROP-ID-XX</option><option value='2'>PROP-ID-YY</option></select></div><br /></td><td><em>XXXXXXXXXXXXXX</em><br /><strong><em>Agreement:</em></strong><a href='javascript:void(0);' data-toggle='modal' data-target='#view-attachment'><strong>PROP-XXX.pdf</strong></a><i class='fa fa-paperclip'></i></td><td class='text-nowrap'><div class='form-group mt-1'><select class='form-control form-control-sm ad-dn color-mg'><option value='0' selected>Choose one</option><option value='1'>EDUCATION</option><option value='2'>LIVELIHOOD</option></select></div><br /></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder=' ' /></div></td><td><div class='form-group mt-1'><select class='form-control form-control-sm ad-dn color-mg'><option value='0' selected>CURR</option><option value='1'>USD</option><option value='2'>INR</option><option value='3'>GBP</option><option value='4'>TAKA</option></select></div><br /></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder=' ' /></div></td><td class='text-center pt-4'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a><a class='dropdown-item' href='#'><strong>Schedule</strong></a></div></div></td></tr>";
      $(".add-donation tbody").append(markup);
  });
});



/* For donation schedule*/
$(document).ready(function() {
  $(".add-row-2").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-sm color-mg'><td class='text-nowrap pt-3'><div class='form-group mt-1'><select class='form-control form-control-sm font-sm ad-dn' placeholder><option value='0' selected>Frequency</option><option value='1'>Monthly</option><option value='2'>Quarterly</option><option value='13'>Yearly</option></select></div></td><td class='text-nowrap pt-3'><div class='floating-label'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm floating-input color-mg ad-dn' placeholder=' ' /><span class='highlight'></span><label class='font-sm'>Number of Periods</label></div></div></td><td class='text-nowrap pt-3'><div class='form-group mt-1'><input class='form-control form-control-sm ad-dn color-mg' type='date' /></div></td><td class='text-nowrap pt-3'><div class='floating-label'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm floating-input color-mg ad-dn' placeholder=' ' /><span class='highlight'></span><label class='font-sm'>Commitment Amt.</label></div></div></td><td class='text-nowrap pt-3'><div class='floating-label'><div class='form-group mt-1'><select class='form-control form-control-sm font-sm ad-dn' placeholder><option value='0' selected>Currency</option><option value='1'>USD</option><option value='2'>INR</option></select></div></div></td></tr>";
      $(".pymt-scdl-tbl tbody").append(markup);
  });
});



/* For add new payment schedule row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td><div class='form-group'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Amount' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Currency' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Conv. Rate' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Conv. Amount' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Transaction ID' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Payment Mode' /></div></td><td style='width: 50px;'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".pymt-rcvd-tbl tbody").append(markup);
  });
});

/* For add new colony member row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-sm color-mg'><td>MEM-ID-001</td><td>John Parker</td><td>dd/mm/yyyy</td><td>MALE</td><td>Aadhar Card</td><td class='text-center w-5x'><div class='dropdown no-arrow dr-all'><a class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' role='button'><i class='fas fa-bars color-mg'></i></a><div class='dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></td></tr>";
      $(".add-colony-members tbody").append(markup);
  });
});

/* For add new Family Details row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-sm color-mg'><td class='text-center w-5x pt-3'>001</td><td><div class='form-group m-0'><input class='form-control form-control-sm ad-dn color-mg' type='text' placeholder='Name' /></div></td><td><div class='form-group m-0'><input class='form-control form-control-sm ad-dn color-mg' type='date' /></div><br /></td><td><div class='form-group m-0'><select class='form-control form-control-sm ad-dn color-mg'><option value='0' selected>Gender</option><option value='1'>M</option><option value='2'>F</option></select></div></td><td><div class='form-group m-0'><select class='form-control form-control-sm ad-dn color-mg'><option value='1'>Self</option><option value='2'>Spouse</option><option value='3'>Son</option><option value='4'>Mother</option><option value='5'>Father</option><option value='6' selected>Grand Son</option><option value='7'>Daughter</option></select></div></td><td><div class='form-group m-0'><select class='form-control form-control-sm ad-dn color-mg'><option value='1'>Married</option><option value='2'>Unmarried</option><option value='3'>Divorced</option></select></div></td><td><div class='form-group m-0'><select class='form-control form-control-sm ad-dn color-mg'><option value='1' selected>Yes</option><option value='2'>No</option></select></div></td><td><div class='form-group m-0'><select class='form-control form-control-sm ad-dn color-mg'><option value='1'>98</option><option value='2'>99</option></select></div></td><td><div class='form-group m-0'><select class='form-control form-control-sm ad-dn color-mg'><option value='1'>Yes</option><option value='2'>No</option></select></div></td><td class='text-center pt-2 w-5x'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></td></tr>";
      $(".maintain-family tbody").append(markup);
  });
});

/* For add new Colony Animator row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td><div class='form-group'><select class='form-control form-control-sm ad-dn'><option value='0' selected>Animator ID</option><option value='1'>Animator_ID-001</option><option value='2'>Animator_ID-002</option><option value='3'>Animator_ID-003</option></select></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Official Name' /></div></td><td class='text-center w-10x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td><td class='text-center w-10x pt-2'><a class='color-mg font-md' href='com-maintain-partners.html'><strong><em>Details</em></strong></a></td></tr>";
      $(".colony-animator-tbl tbody").append(markup);
  });
});

/* For add new Training Partner row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='&lt; Training ID &gt;' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Business Fundmntl' /></div></td><td><div class='form-group'><select class='form-control form-control-sm ad-dn'><option value='1' selected>Duration</option><option value='1'>20</option><option value='2'>30</option><option value='3'>15</option></select></div></td><td class='text-break'>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td><td class='text-break'>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td><td><div class='form-group'><select class='form-control form-control-sm ad-dn'><option value='1'>Yes</option><option value='2'>No</option></select></div></td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".mainatin_training_partners tbody").append(markup);
  });
});

/* For add new Maintain Institute row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td><div class='form-group mt-3'><input type='text' class='form-control form-control-sm ad-dn' placeholder='&lt; Course ID &gt;' /></div></td><td><div class='form-group mt-3'><select class='form-control form-control-sm ad-dn'><option value='1' selected>Duration</option><option value='1'>20</option><option value='2'>30</option><option value='3'>15</option></select></div></td><td><div class='form-group'><textarea class='form-control form-control-sm ad-dn' placeholder='Objectives'></textarea></div></td><td><div class='form-group'><textarea class='form-control form-control-sm ad-dn' placeholder='Expected Outcome'></textarea></div></td><td><div class='form-group mt-3'><input type='text' class='form-control form-control-sm ad-dn' placeholder='99999999' /></div></td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".mainatin_institute tbody").append(markup);
  });
});

/* For add new Class Students row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Member ID' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Member Name' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='School Name' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Medium' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Board' /></div></td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".class_students tbody").append(markup);
  });
});

/* For add new ASLC Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Beneficiary ID' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Beneficiary Name' /></div></td><td class='w-5x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td class='w-5x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td class='w-5x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td class='w-5x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td class='w-5x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Remarks' /></div></td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".aslc_table tbody").append(markup);
  });
});

/* For add new ASLC Attendance Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Beneficiary ID' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Beneficiary Name' /></div></td><td class='w-10x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Remarks' /></div></td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".aslc_attendance_table tbody").append(markup);
  });
});

/* For add new ASLC Voucher Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td><div class='form-group'><select class='form-control form-control-sm ad-dn'><option value='0' selected>Category</option><option value='1'>Department</option><option value='14'>Telephone</option><option value='4'>Electricity</option></select></div></td><td><div class='form-group'><select class='form-control form-control-sm ad-dn'><option value='0' selected>Centre</option><option value='1'>Administration</option><option value='2'>Office Head</option></select></div></td><td><div class='form-group'><textarea class='form-control form-control-sm ad-dn' rows='1'></textarea></div></td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".aslc_voucher_table tbody").append(markup);
  });
});

/* For add new Interview Scoresheet Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td class='w-5x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td class='w-20x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Candidate Name' /></div></td><td><div class='form-group'><select class='form-control form-control-sm ad-dn'><option value='12' selected>01</option><option value='13'>02</option><option value='14'>03</option></select></div></td><td><div class='form-group'><select class='form-control form-control-sm ad-dn'><option value='12' selected>01</option><option value='13'>02</option><option value='14'>03</option></select></div></td><td><div class='form-group'><select class='form-control form-control-sm ad-dn'><option value='12' selected>01</option><option value='13'>02</option><option value='14'>03</option></select></div></td><td><div class='form-group'><select class='form-control form-control-sm ad-dn'><option value='12' selected>01</option><option value='13'>02</option><option value='14'>03</option></select></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Remarks' /></div></td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".interview_scoresheet_table tbody").append(markup);
  });
});

/* For add new payment frequency & amount Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td><div class='form-group'><select class='form-control form-control-sm ad-dn'><option value='0' selected>Institute</option><option value='1'>INS-001</option><option value='2'>INS-002</option></select></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td class='w-10x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td><div class='form-group'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".pymt_freq_table tbody").append(markup);
  });
});

/* For add new payment schedule Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md color-mg'><td class='w-10x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Institute' /></div></td><td class='w-10x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Mess Fee' /></div></td><td class='w-10x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='999999' /></div></td><td><div class='form-group'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".pymt_scdl_student tbody").append(markup);
  });
});

/* For add new payment amount Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td><div class='form-group'><select class='form-control form-control-sm ad-dn'><option value='0' selected>Pay to</option><option value='1'>Institute</option><option value='2'>Beneficiary</option></select></div></td><td><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='10000' /></div></td><td class='w-20x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Once' /></div></td><td class='w-20x'><div class='form-group'><input type='text' class='form-control form-control-sm ad-dn' placeholder='99' /></div></td><td class='w-20x'><div class='form-group'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".pymt_amts_table tbody").append(markup);
  });
});

/* For add new Scholarship Payments Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td class='pt-3 pl-3'><a href='#'><strong>John Doe</strong></a></td><td>Bank Name 1</td><td>Account 1</td><td>18/10/2020</td><td>50000.00</td><td>John Parker</td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".scl_pmt_table tbody").append(markup);
  });
});

/* For add new Track Students Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td>DD/MM/YYYY</td><td>Session-1</td><td>98</td><td class='w-10x'>A</td><td class='text-break'>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".track_performance tbody").append(markup);
  });
});

/* For add new Skill Developments Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td>P1111111</td><td>Program 1</td><td>D 1111111111</td><td><div class='form-group mb-0'><select class='form-control form-control-sm ad-dn'><option value='0' selected></option><option value='2'>INS1111</option><option value='2'>INS2222</option></select></div></td><td>99</td><td>9999999.99</td><td class='text-break'>XXXXXXXXXXXXXXXXXXXXX</td><td class='w-5x'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></td></tr>";
      $(".mn_skl_dev tbody").append(markup);
  });
});

/* For add new Skill Developments Batches Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td><div class='form-group mb-0'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Batch 1111' /></div></td><td><div class='form-group mb-0'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td><div class='form-group mb-0'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='w-15x'><div class='form-group mb-0'><select class='form-control form-control-sm ad-dn'><option value='0' selected>Location</option><option value='1'>Location1</option><option value='2'>Location2</option></select></div></td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".training_batches_table tbody").append(markup);
  });
});

/* For add new allocate students developments Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td class='w-15x'><div class='form-group mb-0'><select class='form-control form-control-sm ad-dn'><option value='0' selected>Location</option><option value='1'>Location1</option><option value='2'>Location2</option></select></div></td><td class='w-15x'>Studnet 1</td><td class='w-15x'>D11111111111</td><td class='w-15x'>A1</td><td class='w-15x'>98</td><td class='w-15x'>YYYYYYYYYYYYYYYYYY&#39;</td><td class='w-5x'><div class='form-group'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".allocate_students_skill_development tbody").append(markup);
  });
});

/* For add new person affected family list Table row */
$(document).ready(function() {
  $(".add-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-sm color-mg'><td class='w-15x'><div class='form-group m-0'><input type='text' class='form-control form-control-sm ad-dn color-mg' placeholder='Name' /></div></td><td class='w-10x'><div class='form-group m-0'><input type='text' class='form-control form-control-sm ad-dn color-mg' placeholder='Age' /></div><br /></td><td class='w-15x'><div class='form-group m-0'><select class='form-control form-control-sm ad-dn color-mg'><option value='0' selected>Relationship</option><option value='1'>Son</option><option value='2'>Father</option></select></div></td></tr>";
      $(".family-affected-table tbody").append(markup);
  });
});

/* For add new row in donation payment schedule Table row */
$(document).ready(function() {
  $(".don-pymt-schdl-btn").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md text-black'><td><div class='form-group mb-0'><input class='form-control ad-dn' type='date' /></div></td><td><div class='form-group mb-0'><input type='text' class='form-control ad-dn' placeholder='Due Amount' /></div></td><td><div class='form-group mb-0'><select class='form-control ad-dn'><option value='12' selected>Currency</option><option value='13'>USD</option><option value='14'>INR</option></select></div></td></tr>";
      $(".don-pymt-schdl tbody").append(markup);
  });
});

/* For add new row in add year table Table row */
$(document).ready(function() {
  $(".add-year-btn").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-sm color-mg'><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='YYYY' /></div></td><td class='text-center'><div class='form-group mt-1'><select class='form-control form-control-sm ad-dn'><option value='1'>Type-1</option><option value='2'>Type-2</option></select></div></td><td class='text-center'><div class='form-group mt-1'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='text-center'><div class='form-group mt-1'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='999' /></div></td><td class='text-center pt-2 w-5x'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></td></tr>";
      $(".add-year-tbl tbody").append(markup);
  });
});

/* For add new row in Class Promotion Table row */
$(document).ready(function() {
  $(".add-student-btn").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-md'><td class='text-center w-5x pt-2'><div class='form-group mb-0'><input type='checkbox' /></div></td><td><div class='form-group mb-0'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Beneficiary ID' /></div></td><td><div class='form-group mb-0'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Beneficiary Name' /></div></td><td class='w-10x'><div class='form-group mb-0'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td class='w-10x'><div class='form-group mb-0'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td class='w-10x'><div class='form-group mb-0'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td class='w-10x'><div class='form-group mb-0'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td class='w-10x'><div class='form-group mb-0'><input type='text' class='form-control form-control-sm ad-dn' /></div></td><td><div class='form-group mb-0'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Remarks' /></div></td><td class='w-5x'><div class='form-group mb-0'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></div></td></tr>";
      $(".promote_students_table tbody").append(markup);
  });
});


/* For add new row in Contract Details Table row */
$(document).ready(function() {
  $(".add-contract-row-btn").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-sm color-mg'><td class='text-center'><div class='form-group mt-1'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='text-center'><div class='form-group mt-1'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='9999' /></div></td><td class='text-center'><div class='form-group mt-1'><select class='form-control form-control-sm ad-dn color-mg'><option value='1'>1111111</option><option value='2'>222222</option></select></div></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='xxxxxxxxxxxxxxxx' /></div></td><td class='text-center'><div class='form-group mt-1'><select class='form-control form-control-sm ad-dn color-mg'><option value='1'>xxxxxxxxxxx</option><option value='2'>yyyyyyyyyyy</option></select></div></td><td class='text-center'><div class='form-group mt-1'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='text-center'><a href='#'>File Name</a></td><td class='text-center pt-2 w-5x'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></td></tr>";
      $(".add-contract-table tbody").append(markup);
  });
});

/* For add new row in health checkup Table row */
$(document).ready(function() {
  $(".health-checkup-btn").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-sm color-mg'><td class='text-center'><div class='form-group mt-1'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='text-center'><div class='form-group mt-1'><select class='form-control form-control-sm ad-dn'><option value='12' selected>XXXXXXXXXXXXXXX</option><option value='13'>YYYYYYYYYYYYYYYY</option></select></div></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='999999' /></div></td><td class='text-center pt-3'><a href='#'><strong>File Name </strong><i class='fa fa-paperclip'></i></a></td><td class='text-center pt-2 w-5x'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a></div></div></td></tr>";
      $(".health-checkup-tbl tbody").append(markup);
  });
});

/* For add new row in health checkup Table row */
$(document).ready(function() {
  $(".increment-btn").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-sm color-mg'><td class='text-center'><div class='form-group mt-1'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='text-center'><div class='form-group mt-1'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='999999' /></div></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='99.99' /></div></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='9999999' /></div></td><td class='text-center'><div class='form-group mt-1'><select class='form-control form-control-sm ad-dn'><option value='1' selected>Yes</option><option value='2'>No</option></select></div></td><td class='text-center'><div class='form-group mt-1'><select class='form-control form-control-sm ad-dn'><option value='1'>Designation-1</option><option value='2'>Designation-2</option></select></div></td><td class='text-center'><div class='form-group mt-1'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='text-center'><div class='form-group mt-1'><a href='#'><strong>File Name </strong><i class='fa fa-paperclip'></i></a></div></td><td class='text-center pt-2 w-5x'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Save Record</strong></a><a class='dropdown-item' href='#'><strong>Edit Record</strong></a></div></div></td></tr>";
      $(".increment-tbl tbody").append(markup);
  });
});

/* For add new row in Event task Table row */
$(document).ready(function() {
  $(".event-task-btn").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr class='font-sm color-mg'><td class='w-10x'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='01' /></div></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Event Brochure' /></div></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Printer/Ad Agency' /></div></td><td class='text-center'><div class='form-group mt-1'><input class='form-control form-control-sm ad-dn' type='date' /></div></td><td class='text-center'><div class='form-group mt-1'><input type='text' class='form-control form-control-sm ad-dn' placeholder='Printer/Ad Agency' /></div></td><td class='text-center pt-2 w-5x'><div class='dropdown no-arrow dr-all'><button class='btn btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button'><i class='fas fa-bars'></i></button><div class='dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in'><a class='dropdown-item' href='#'><strong>Edit Record</strong></a><a class='dropdown-item' href='#'><strong>Delete Record</strong></a></div></div></td></tr>";
      $(".event-task-tbl tbody").append(markup);
  });
});