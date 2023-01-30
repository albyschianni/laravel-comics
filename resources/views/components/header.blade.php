

<div class="stacco-sopra"></div>
<div class="container">

    <div class="logo-section">
        
        <img src="../assets/images/dc-logo.png" alt="DC logo">
        
    </div>

    <nav class="nav-section">
        <ul>
            <li v-for="(link, index) in argomenti" :key="index">
                <a :class="{active: link.current}" href="#">
                    {{link.text}}
                </a>
            </li>
            
        </ul>
    </nav>

</div> 