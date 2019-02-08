<script>
export default {
  render() {
    return (
      <button type="button" class="btn btn-sm btn-danger mr-2">
        {this.$slots.default}
      </button>
    );
  }
};
</script>
