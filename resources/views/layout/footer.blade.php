<div>
    <!-- Well begun is half done. - Aristotle -->
</div>
<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    function submitDeleteForm(button){
        const userResponse = confirm('Are you sure you want to delete?');
        if (userResponse){
           const form = button.parentElement;
           form.submit();            
        }
    }
</script>

