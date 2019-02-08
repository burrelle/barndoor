<script>
export default {
  render() {
    return (
      <button type="button" class="btn btn-sm btn-outline-secondary">
        {this.$slots.default}
      </button>
    );
  }
};
</script>
