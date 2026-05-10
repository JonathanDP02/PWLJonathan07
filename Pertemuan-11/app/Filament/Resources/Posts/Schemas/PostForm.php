<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Group;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Section::make("Post Details")
                -> Description("Fill in the details of the post")
                -> Icon('heroicon-o-document-text')
                ->schema([
                Group::make([
                TextInput::make("title")
                    ->rules('required | min:3 | max:10'),
                TextInput::make("slug")
                    ->rules('required')
                    ->unique()
                    ->validationMessages([
                        'unique' => 'Slug must be unique.',
                    ]),
                Select::make("category_id")
                    ->relationship("category", "name")
                    ->required()
                    ->preload()
                    ->searchable(),
                ColorPicker::make("color"),
                // MarkdownEditor::make("body"),
                ])->columns(2),
                RichEditor::make("body"),
                ])->columnSpan(2),

            Group::make([

                Section::make("Image Upload")
                ->schema([
                    FileUpload::make("image")
                        ->required()
                        ->disk("public")
                        ->directory("posts"),
                ]),

                Section::make("Meta Information")
                ->schema([
                    TagsInput::make("tags")
                        ->required(),
                    Checkbox::make("published")
                        ->required(),
                    DateTimePicker::make("published_at")
                        ->required(),
                ]),
                ])->columnSpan(1),
            
            ])->columns(3);
    }
}
