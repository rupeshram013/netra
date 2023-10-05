
console.log("Script was loaded!");



function add_thread(){

    thread_box = document.getElementById("thread");

    thread_element = document.createElement(
        `           
    <div id="thread_content">
    <div id="left_box">
        ---o
    </div>
    <div id="right_box">
        <h3>Is adverstisement killing us everday?</h3>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit tempore harum laborum perspiciatis, quos saepe in quaerat molestiae minima consequatur a velit, perferendis sapiente eum iure voluptatum nostrum? Nihil vitae, excepturi ratione dicta at doloremque error rerum esse omnis. Aspernatur assumenda minus possimus reprehenderit hic officiis mollitia vitae voluptatem recusandae quaerat repudiandae quis nobis libero non, atque quos sapiente dolor dolores doloremque. Asperiores ipsam quaerat inventore dignissimos quo sint, explicabo neque, sequi error vero pariatur assumenda esse sed odit quos.</p>
    </div>
    </div>`
    )

    thread_box.appendChild(thread_element)


}


function change_tab(tag_id){
    section = document.getElementById("news");
    opposite_section = document.getElementById("thread");

    if(section.style.display === "none"){
        section.style.display = "block";
        opposite_section.style.display = "none";
    }else{
        opposite_section.style.display = "block";
        section.style.display="none";
    }


}

switch_index = 0;

function switch_tab_P(){

    switch_index = 1;
    
    thread_section = document.getElementById("thread");
    news_section = document.getElementById("news");
    
    switch_tab_button_M = document.getElementById("M_switch_arrow");
    switch_tab_button_P = document.getElementById("P_switch_arrow");
    

    switch_tab_button_M.style.color = "rgb(56, 89, 224)";
    switch_tab_button_P.style.color = "rgb(0, 0, 0,0.5)";

    thread_section.style.display = "none";
    news_section.style.display = "block";

    
    console.log("Switch News!");

}

function switch_tab_M(){
    
    console.log("Switch thread!");
    switch_index = 2;
    
    thread_section = document.getElementById("thread");
    news_section = document.getElementById("news");
    
    switch_tab_button_P = document.getElementById("P_switch_arrow");
    switch_tab_button_M = document.getElementById("M_switch_arrow");

    switch_tab_button_P.style.color = "rgb(56, 89, 224)";
    switch_tab_button_M.style.color =  "rgb(0, 0, 0,0.5)";
    
    thread_section.style.display = "block";
    news_section.style.display = "none";

    
}

function thread_tab(tag_id){
    section = document.getElementById("thread");
    opposite_section = document.getElementById("news");


    if(section.style.display === "none"){
        opposite_section.style.display = "none";
        section.style.display = "block";
    }else{
        section.style.display="none";
        opposite_section.style.display = "block";
    }


}

function show_nav(){
    
    alert("nothing");
    nav_options = document.getElementById("options");

    if(nav_options.style.display === "none"){
        nav_options.style.display = "block";
    }else{
        nav_options.style.display = "none";
    }
}