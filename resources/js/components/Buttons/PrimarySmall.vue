<script>
export default {
  render() {
    return (
      <button type="button" class="btn btn-sm btn-primary">
        {this.$slots.default}
      </button>
    );
  }
};
</script>
