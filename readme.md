## Relationships

### BelongsTo
 - `Article.author(Author)`
 - `Author.user(User)`
 - `Comment.article(Article)`
 - `Comment.user(User)`
 - `Like.user(User)`
 - `Report.user(User)`
 - `Review.user(User)`

### BelongsToMany
 - `Article.tags(Tag)`
 - `Tag.articles(Article)`

### HasMany
 - `Article.comments(Comment)`
 - `Author.articles(Article)`
 - `User.comments(Comment)`
 - `User.likes(Like)`
 - `User.reports(Report)`
 - `User.reviews(Review)`

### HasManyThrough
 - `Author.comments(Comment, Article)`

### HasOne
 - `User.author(Author)`

### MorphedByMany
 - `Report.articles(Article, reportable)`
 - `Report.authors(Author, reportable)`
 - `Report.comments(Comment, reportable)`

### MorphMany
 - `Article.likes(Like, likeable)`
 - `Author.likes(Like, likeable)`
 - `Comment.likes(Like, likeable)`

### MorphTo
 - `Like.likeable()`
 - `Review.reviewable()`

### MorphToMany
 - `Article.reports(Report, reportable)`
 - `Author.reports(Report, reportable)`
 - `Comment.reports(Report, reportable)`

### MorphOne
 - `Article.review(Review, reviewable)`
 - `Comment.review(Review, reviewable)`
