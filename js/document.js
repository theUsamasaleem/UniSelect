$(document).ready(function() {
    $('.js-example-basic-single').select2();

    $('[data-toggle="tooltip"]').tooltip();

    $('input[name="study_level"]').change(function(){
        if( $('input[name="study_level"]').val() ) {
            $('.destination').css('display', 'block');
        }
    });
    $('input[name="destination"]').change(function(){
        $('.subject-input').css('display', 'block');
    });

    $('select[name="studyLevel"]').change(function(){
        if(this.value == 'highschool') {
            $('.high-school-wrapper').css('display', 'block');
        } else {
            $('.high-school-wrapper').css('display', 'none');
        }
    });

    $("a.for-pwd").click(function(){
        $('ul.nav.nav-tabs').css('display', 'none');
        $('div#Login').removeClass('active');
        $('div#Registration').removeClass('active');
        $('div#Forget').addClass('active');
        $("h4.modal-title").text("Forget Password");
    });

    $("button.close").click(function(){
        $('ul.nav.nav-tabs').css('display', 'flex');
        $('div#Login').addClass('active');
        $('div#Registration').removeClass('active');
        $('div#Forget').removeClass('active');
        $("h4.modal-title").text("Customer Login");
        $("a.login-anc").addClass('active');
        $("a.reg-anc").removeClass('active');
    });

    // UI slider
    $('.noUi-handle').on('click', function() {
        $(this).width(50);
    });
    var rangeSlider = document.getElementById('slider-range');
    var moneyFormat = wNumb({
        decimals: 0,
        thousand: ',',
        prefix: 'Rs. '
    });
    noUiSlider.create(rangeSlider, {
        start: [10000, 150000],
        step: 1,
        range: {
          'min': [50],
          'max': [150000]
        },
        format: moneyFormat,
        connect: true
    });
      
      // Set visual min and max values and also update value hidden form inputs
    rangeSlider.noUiSlider.on('update', function(values, handle) {
        document.getElementById('slider-range-value1').innerHTML = values[0];
        document.getElementById('slider-range-value2').innerHTML = values[1];
        document.getElementsByName('min-value').value = moneyFormat.from(values[0]);
        document.getElementsByName('max-value').value = moneyFormat.from(values[1]);
    });

    // Multi step form
    const DOMstrings = {
        stepsBtnClass: 'multisteps-form__progress-btn',
        stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
        stepsBar: document.querySelector('.multisteps-form__progress'),
        stepsForm: document.querySelector('.multisteps-form__form'),
        stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
        stepFormPanelClass: 'multisteps-form__panel',
        stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
        stepPrevBtnClass: 'js-btn-prev',
        stepNextBtnClass: 'js-btn-next'
    };

    //remove class from a set of items
    const removeClasses = (elemSet, className) => {
        elemSet.forEach(elem => {
            elem.classList.remove(className);
        });
    };

    //return exect parent node of the element
    const findParent = (elem, parentClass) => {
        let currentNode = elem;
        while(! (currentNode.classList.contains(parentClass))) {
            currentNode = currentNode.parentNode;
        }
        return currentNode;
    };

    //get active button step number
    const getActiveStep = elem => {
        return Array.from(DOMstrings.stepsBtns).indexOf(elem);
    };

    //set all steps before clicked (and clicked too) to active
    const setActiveStep = (activeStepNum) => {
      
        //remove active state from all the state
        removeClasses(DOMstrings.stepsBtns, 'js-active');

        //set picked items to active
        DOMstrings.stepsBtns.forEach((elem, index) => {

            if(index <= (activeStepNum) ) {
                elem.classList.add('js-active');
            }

        });
    };

    //get active panel
    const getActivePanel = () => {
        let activePanel;

        DOMstrings.stepFormPanels.forEach(elem => {
            if(elem.classList.contains('js-active')) {
                activePanel = elem; 
            }
        });
        return activePanel;                           
    };

    //open active panel (and close unactive panels)
    const setActivePanel = activePanelNum => {
        //remove active class from all the panels
        removeClasses(DOMstrings.stepFormPanels, 'js-active');

        //show active panel
        DOMstrings.stepFormPanels.forEach((elem, index) => {
            if(index === (activePanelNum)) {
                elem.classList.add('js-active');
                setFormHeight(elem);
            }
        })
    };

    //set form height equal to current panel height
    const formHeight = (activePanel) => {
      
        const activePanelHeight = activePanel.offsetHeight;
      
        DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
      
    };

    const setFormHeight = () => {
        const activePanel = getActivePanel();

        formHeight(activePanel);
    }

    //PREV/NEXT BTNS CLICK
    DOMstrings.stepsForm.addEventListener('click', e => {

        const eventTarget = e.target;

        //check if we clicked on `PREV` or NEXT` buttons
        if(! ( (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) || (eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)) ) ) {
            return;
        }

        //find active panel
        const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

        let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

        //set active step and active panel onclick
        if(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
            activePanelNum--;
        } else {
            activePanelNum++;
        }

        setActiveStep(activePanelNum);
        setActivePanel(activePanelNum);
      
    });

    //SETTING PROPER FORM HEIGHT ONLOAD
    window.addEventListener('load', setFormHeight, false);

    //SETTING PROPER FORM HEIGHT ONRESIZE
    window.addEventListener('resize', setFormHeight, false);
});