<script>
import ChangeToolbar from "./ChangeToolbar";
import OutlineSecondarySmall from "./Buttons/OutlineSecondarySmall";
import DangerSmall from "./Buttons/DangerSmall";
import OutlineInfoSmall from "./Buttons/OutlineInfoSmall";
import axios from "axios";
export default {
  name: "horse-card",
  props: ["horse", "owner"],
  data: () => ({
    show: false
  }),
  methods: {
    capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    },
    async handleDelete() {
      const url = "http://barndoor.test/horses/" + this.horse.id;
      const response = await axios.delete(url);
      if (response.statusText === "OK") {
        window.location.reload();
      }
    }
  },
  render() {
    const { id, name, gender, breed, color, height } = this.horse;
    return (
      <div id={id} class="container mb-2">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header text-right">
                <div>
                  {!this.show ? (
                    <div onClick={() => (this.show = !this.show)}>
                      <OutlineInfoSmall>Edit</OutlineInfoSmall>
                    </div>
                  ) : (
                    <div class="d-flex justify-content-end">
                      <div onClick={this.handleDelete}>
                        <DangerSmall>Delete</DangerSmall>
                      </div>
                      <div onClick={() => (this.show = !this.show)}>
                        <OutlineSecondarySmall>Cancel</OutlineSecondarySmall>
                      </div>
                    </div>
                  )}
                </div>
              </div>
              <div class="card-body d-flex align-items-center">
                <img class="rounded-circle mr-3" src="https://via.placeholder.com/75" />
                {name}
                <br />
                {this.owner}
              </div>
              {this.show && <ChangeToolbar />}
            </div>
          </div>
        </div>
      </div>
    );
  }
};
</script>
