module.exports = function(eleventyConfig) {
  eleventyConfig.addPassthroughCopy("css");
  eleventyConfig.addPassthroughCopy("fonts");
  eleventyConfig.addPassthroughCopy("images");
  eleventyConfig.addPassthroughCopy("js");
  eleventyConfig.addPassthroughCopy("admin/config.yml");

  eleventyConfig.addFilter("markdownify", function(content) {
    var MarkdownIt = require("markdown-it");
    var md = new MarkdownIt();
    var result = md.render(content);
    return result;
  });
};
