const accordionTitles = document.querySelectorAll(".accordion_titl");

accordionTitles.forEach((accordionTitle) => {
    accordionTitle.addEventListener("click", () => {
        const height = accordionTitle.nextElementSibling.scrollHeight;
        accordionTitle.classList.toggle("active_header")
        if(accordionTitle.classList.contains("active_header")){
            accordionTitle.nextElementSibling.style.maxHeight = `${height}px`; 
        }else{
            accordionTitle.nextElementSibling.style.maxHeight = "0px";
        }
    })
})

