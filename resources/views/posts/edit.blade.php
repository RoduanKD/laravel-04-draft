@extends('layouts.public')

@section('title', '- edit: ' . $post->title_en)

@section('content')
    <input class="input @error('title') is-danger @enderror" name="title" type="text" placeholder="Post Title"
        value="{{ $post->title }}">
    </div>
    @error('title')
        <p class="help is-danger">{{ $message }}</p>
    @enderror
    </div>
    </div>
    <div class="column is-12">
        <label class="label">Content</label>
        <div class="control">
            <textarea class="textarea @error('content') is-danger @enderror"
                placeholder="This is an example for post content" name="content" cols="30"
                rows="10">{{ $post->content }}</textarea>
        </div>
        @error('content')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    </div>
    <<<<<<< HEAD <div class="column is-12">
        <div class="field">
            <label class="label">Category</label>
            <div class="control">
                <div class="select is-fullwidth @error('category_id') is-danger @enderror">
                    <select name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @error('category_id')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        </div>
        <div class="column is-12">
            <div class="field">
                <label class="label">Tags</label>
                <div class="control">
                    <div class="select is-multiple is-fullwidth  @error('tags') is-danger @enderror">
                        <select name="tags[]" multiple>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}"
                                    {{ in_array($tag->id, old('tags[]') ?? []) ? 'selected' : '' }}>
                                    {{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @error('tags')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
                @error('tags.*')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="column is-12"><input type="submit" class="button is-primary is-outlined is-fullwidth"
                value="Add new Post"></div>
        </div>
        </div>
        </div>
        </form>
        </div>
        </section>
        =======
        </div>
        <div class="column is-12"><input type="submit" class="button is-primary is-outlined is-fullwidth"
                value="Edit Post"></div>
        </div>
        </form>
        </div>
        </div>
        </div>
        >>>>>>> 383a0ec6ea77103a7213091968b556986c23a61a
    @endsection
