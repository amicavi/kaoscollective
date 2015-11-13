(function(){
    // declare variables
    var sections, navItems, navLinks, stickyNav;
    // here start the function to get the elements for the document, but I don't understand events yet.
    document.addEventListener('DOMContentLoaded', function(){
        //
        sections = document.getElementsByTagName('section');// Array[<section>, <section>, <section>, <section>]
        navItems = document.getElementsByTagName('nav')[0].getElementsByTagName('li'); // array [li, li, li, li, li]
        navLinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');

        stickyNav();
    });

    stickyNav = function(event){
        if(window.scrollY >= 75){
            document.getElementsByTagName('header')[0].classList.add('scrolled');
        }else{
            document.getElementsByTagName('header')[0].classList.remove('scrolled');
        }

        /* then we call a for loop to plus one in the select array and change the number, but I don't know why
        you set the .length method */
        for(var i = 0; i < navItems.length; i++){
            //once we select the array, in this part add the class
            navItems[i].classList.remove('active');
        }

        /* with this loop I just can undestand that you set the top and bottom border with variables and methods
        but I just have the idea */
        for(var j = 0; j < sections.length; j++){
            var sectionTopBorder, sectionBottomBorder;

            sectionTopBorder = sections[j].offsetTop;
            sectionBottomBorder = sectionTopBorder + sections[j].offsetHeight;

            if (sectionTopBorder <= window.scrollY && sectionBottomBorder > window.scrollY) {
                var sectionID = sections[j].id;
                var targetSection = document.getElementById(sectionID+'_nav');
                targetSection.classList.add('active');
            }
        }
    };

    //In this part we add and remove the new classes, starting with the sticky nav setting as we have it before
    window.addEventListener('scroll', stickyNav);
})();