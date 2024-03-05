<script>
    const rb_reg = document.getElementById("rb_regular");
    const rb_irreg = document.getElementById("rb_irregular");

    function renderAll() {
        rb_reg.checked = true;
        document.getElementById("regular_student").style.display = "block";
        document.getElementById("irregular_student").style.display = "none";
    }

    rb_reg.addEventListener('click', function(){
        rb_irreg.checked = !this.checked;
        document.getElementById("regular_student").style.display = "block";
        document.getElementById("irregular_student").style.display = "none";
    });

    rb_irreg.addEventListener('click', function(){
        rb_reg.checked = !this.checked;
        document.getElementById("regular_student").style.display = "none";
        document.getElementById("irregular_student").style.display = "block";
    });
</script>
