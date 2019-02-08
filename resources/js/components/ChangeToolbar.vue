<script>
import PrimarySmall from "./Buttons/PrimarySmall";
export default {
  name: "change-toolbar",
  props: ["show"],
  render() {
    return (
      <div class="card-footer">
        <PrimarySmall>Save</PrimarySmall>
      </div>
    );
  }
};
</script>
