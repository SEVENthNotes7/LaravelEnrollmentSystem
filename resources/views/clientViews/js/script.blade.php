<script>
    const rb_reg = document.getElementById("rb_regular");
    const rb_irreg = document.getElementById("rb_irregular");

    const data = [];

    function renderAll() {
        rb_reg.checked = true;
        document.getElementById("regular_student").style.display = "block";
        document.getElementById("irregular_student").style.display = "none";

    }

    function numSub(val) {
        let element = "";
        let table = document.getElementById("table");
        for (let i = 0; i < val; i++) {
            element += `
                <tr>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
            `;
        }
        table.innerHTML = element;
    }

    rb_reg.addEventListener('click', function() {
        rb_irreg.checked = !this.checked;
        document.getElementById("regular_student").style.display = "block";
        document.getElementById("irregular_student").style.display = "none";
    });

    rb_irreg.addEventListener('click', function() {
        rb_reg.checked = !this.checked;
        document.getElementById("regular_student").style.display = "none";
        document.getElementById("irregular_student").style.display = "block";
    });
</script>
