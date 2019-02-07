<script>
export default {
  name: "horse-card",
  props: ["horse"],
  methods: {
    capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }
  },
  render() {
    const { id, name, gender, breed, color, height } = this.horse;
    return (
      <div id={id} class="container mb-2">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">{name}</div>
              <div class="card-body">
                {this.capitalizeFirstLetter(gender)} - {breed} - {color} - {" "}
                {height} hh
              </div>
            </div>
          </div>
        </div>
      </div>
    );
  }
};
</script>
