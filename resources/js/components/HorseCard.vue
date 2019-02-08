<script>
import ChangeToolbar from "./ChangeToolbar";
import OutlineSecondarySmall from './Buttons/OutlineSecondarySmall';
import DangerSmall from './Buttons/DangerSmall';
import OutlineInfoSmall from './Buttons/OutlineInfoSmall';
import axios from 'axios';
export default {
  name: "horse-card",
  props: ["horse"],
  data: () => ({
    show: false
  }),
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
              <div class="card-header d-flex justify-content-between">
                {name}
                <div onClick={() => (this.show = !this.show)}>
                  {!this.show ? (
                    <OutlineInfoSmall>Edit</OutlineInfoSmall>
                  ) : (
                    <div>
                      <DangerSmall>Delete</DangerSmall>
                      <OutlineSecondarySmall>Cancel</OutlineSecondarySmall>
                    </div>
                  )}
                </div>
              </div>
              <div class="card-body">
                {this.capitalizeFirstLetter(gender)} - {breed} - {color} -{" "}
                {height} hh
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
