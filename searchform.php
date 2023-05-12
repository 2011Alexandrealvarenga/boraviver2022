<form role="search" method="get" id="searchform" class="form-inline my-2 my-lg-0" action="<?php echo esc_url(home_url('/')) ?>">    
                
    <div>
        <label class="screen-reader-text" for="s">Pesquisar por:</label>
        <div class="content-form">
            <input type="text" value="" name="s" id="s">            
            <button type="submit" id="searchsubmit">
                <img src="http://www.boraviver.space/wp-content/themes/boraviver2022/assets/img/search.svg" >
            </button>
        </div>

        <input type="hidden" value="post" name="post_type" id="post_type">

    </div>
</form>
<style>
    .navbar #searchsubmit img,
    form #searchsubmit img {
        width: 17px;
        /* padding: 8px; */
    }
    .navbar button#searchsubmit,
    button#searchsubmit {
        /* background: lightblue; */
        /* width: 30px; */
        /* height: 30px; */
        /* padding: 2px; */
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border: none;
        background: none;
    }
    .navbar .content-form,
    #searchform .content-form {
        /* height: 100px; */
        /* background: yellow; */
        /* justify-content: center; */
        display: flex;
        align-items: center;
    }
</style>