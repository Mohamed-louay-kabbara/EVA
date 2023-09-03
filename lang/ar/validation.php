<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute يجب قبول الحقل.',
    'accepted_if' => 'الحقل :attribute  يجب قبوله عندما  :other يكون :value.',
    'active_url' => 'الحقل :attribute لا يُمثَل رابطاً صحيحاً',
    'after' => 'يجب علي الحقل :attribute ان يكون تاريخاً لاحقاً للتاريخ :date.',
    'after_or_equal' => 'الحقل :attribute ان يكون تاريخاً لاحقاً أو مطابقاً :date.',
    'alpha' => 'الحقل :attribute يجب أن تحتوي على رسائل فقط.',
    'alpha_dash' => 'الحقل :attribute يجب أن تحتوي فقط على أحرف وأرقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'الحقل :attribute يجب أن تحتوي فقط على أحرف وأرقام.',
    'array' => 'الحقل :attribute يجب أن يكون مصفوفة.',
    'before' => 'الحقل :attribute يجب أن يكون التاريخ قبل. :التاريخ.',
    'before_or_equal' => 'الحقل :attribute يجب أن يكون تاريخا قبل أو يساوي :التاريخ.',
    'between' => [
        'array' => 'الحقل :attribute يجب أن يكون بين: min و: max العناصر.',
        'file' => 'الحقل :attribute يجب أن يكون بين :min and :max كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون بين :min and :max.',
        'string' => 'الحقل :attribute يجب أن يكون بين :min and :max الاحرف.',
    ],
    'boolean' => 'الحقل :attribute يجب أن يكون الحقل صواب أو خطأ.',
    'confirmed' => 'الحقل :attribute التأكيد غير متطابق.',
    'current_password' => 'الحقل كلمة المرور غير صحيحة.',
    'date' => 'الحقل :attribute ليس تاريخا صالحا.',
    'date_equals' => 'الحقل :attribute يجب أن يكون تاريخا مساويا ل :date.',
    'date_format' => 'الحقل :attribute لا يتطابق مع التنسيق :format.',
    'declined' => 'الحقل :attribute يجب رفضه.',
    'declined_if' => 'الحقل :attribute يجب رفضه عندما: أخرى :value.',
    'different' => 'الحقل :attribute و: أخرى يجب أن تكون مختلفة.',
    'digits' => 'الحقل :attribute يجب أن يكون :digits ارقام.',
    'digits_between' => 'الحقل :attribute يجب أن يكون بين :min and :max digits.',
    'dimensions' => 'الحقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'الحقل :attribute يحتوي الحقل على قيمة مكررة.',
    'doesnt_end_with' => 'الحقل :attribute قد لا تنتهي بأحد الإجراءات التالية: :values.',
    'doesnt_start_with' => 'الحقل :attribute قد لا يبدأ بأحد الإجراءات التالية: :values.',
    'email' => 'الحقل :attribute يجب أن يكون عنوان بريد إلكتروني صالحا.',
    'ends_with' => 'الحقل :attribute يجب أن تنتهي بأحد الإجراءات التالية: :values.',
    'enum' => 'المحدد:attribute غير صالح.',
    'exists' => 'المحدد :attribute غير صالح.',
    'file' => 'الحقل :attribute يجب أن يكون ملفا.',
    'filled' => 'الحقل :attribute يجب أن يكون للحقل قيمة.',
    'gt' => [
        'array' => 'الحقل :attribute يجب أن يكون أكثر من :value عناصر.',
        'file' => 'الحقل :attribute يجب أن يكون أكبر من :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أكبر من :value.',
        'string' => 'الحقل :attribute يجب أن يكون أكبر من :value الأحرف.',
    ],
    'gte' => [
        'array' => 'الحقل :attribute يجب أن يكون :value عناصر أو أكثر.',
        'file' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value.',
        'string' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value الاحرف.',
    ],
    'image' => 'الحقل :attribute يجب أن تكون صورة.',
    'in' => 'The selected :attribute غير صالح.',
    'in_array' => 'الحقل :attribute الحقل غير موجود في :other.',
    'integer' => 'الحقل :attribute يجب أن يكون عددا صحيحا.',
    'ip' => 'الحقل :attribute يجب أن يكون عنوان IP صالحا.',
    'ipv4' => 'الحقل :attribute يجب أن يكون عنوان IPv4 صالحا.',
    'ipv6' => 'الحقل :attributeيجب أن يكون عنوان IPv6 صالحا.',
    'json' => 'الحقل :attribute يجب أن تكون سلسلة JSON صالحة.',
    'lt' => [
        'array' => 'الحقل :attribute يجب أن يكون أقل منn :value عناصر.',
        'file' => 'الحقل :attribute يجب أن يكون أقل من:value كيلوبايت.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'الحقل :attribute يجب أن يكون أقل من :value الأحرف.',
    ],
    'lte' => [
        'array' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :value عناصر.',
        'file' => 'الحقل :attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'الحقل :attributeيجب أن يكون أقل من أو يساوي :value.',
        'string' => 'الحقل :attribute يجب أن يكون أقل من أو يساوي :value الأحرف.',
    ],
    'mac_address' => 'الحقل :attribute يجب أن يكون عنوان MAC صالحا.',
    'max' => [
        'array' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :max عناصر.',
        'file' => 'الحقل :attribute يجب ألا يكون أكبر من :max كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب ألا يكون أكبر من :max.',
        'string' => 'الحقل :attribute يجب ألا يكون أكبر من :max الأحرف.',
    ],
    'max_digits' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :max ارقام.',
    'mimes' => 'الحقل :attribute يجب أن يكون ملفا من نوع: :values.',
    'mimetypes' => 'الحقل :attribute يجب أن يكون ملفا من نوع: :values.',
    'min' => [
        'array' => 'الحقل :attribute يجب أن يكون على الأقل :min عناصر.',
        'file' => 'الحقل :attribute يجب أن يكون على الأقل :min كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون على الأقل :min.',
        'string' => 'الحقل :attribute يجب أن يكون على الأقل :min الأحرف.',
    ],
    'min_digits' => 'الحقل :attribute يجب أن يكون على الأقل :min ارقام.',
    'multiple_of' => 'الحقل :attribute يجب أن يكون مضاعف :value.',
    'not_in' => 'The selected :attribute غير صالح.',
    'not_regex' => 'الحقل :attribute التنسيق غير صالح.',
    'numeric' => 'الحقل :attribute يجب أن يكون رقما.',
    'password' => [
        'letters' => 'الحقل :attribute يجب أن تحتوي على حرف واحد على الأقل.',
        'mixed' => 'الحقل :attribute يجب أن تحتوي على حرف كبير واحد على الأقل وحرف صغير واحد.',
        'numbers' => 'الحقل :attribute يجب أن تحتوي على رقم واحد على الأقل.',
        'symbols' => 'الحقل :attribute يجب أن تحتوي على رمز واحد على الأقل.',
        'uncompromised' => 'The given :attribute ظهر في تسرب البيانات. الرجاء اختيار مختلف :attribute.',
    ],
    'present' => 'الحقل :attribute يجب أن يكون الحقل موجودا.',
    'prohibited' => 'الحقل :attribute الحقل محظور.',
    'prohibited_if' => 'الحقل :attribute الحقل محظور عندما: أخرى :value.',
    'prohibited_unless' => 'الحقل :attribute الحقل محظور ما لم: أخرى في :values.',
    'prohibits' => 'الحقل :attribute يمنع الحقل: أخرى من التواجد.',
    'regex' => 'الحقل :attribute التنسيق غير صالح.',
    'required' => 'الحقل :attribute الحقل مطلوب.',
    'required_array_keys' => 'الحقل :attribute يجب أن يحتوي الحقل على إدخالات ل: :values.',
    'required_if' => 'الحقل :attribute الحقل مطلوب عندما: أخرى :value.',
    'required_if_accepted' => 'الحقل :attribute الحقل مطلوب عندما: يتم قبول أخرى.',
    'required_unless' => 'الحقل :attribute الحقل مطلوب ما لم: أخرى في :values.',
    'required_with' => 'الحقل :attribute الحقل مطلوب عندما :values موجود.',
    'required_with_all' => 'الحقل :attribute الحقل مطلوب عندما :values موجودة.',
    'required_without' => 'الحقل :attribute الحقل مطلوب عندما :values is غير موجود',
    'required_without_all' => 'الحقل :attribute الحقل مطلوب عندما لا يكون أي من :valuesموجودة.',
    'same' => 'الحقل :attribute , :أخرى يجب أن تتطابق.',
    'size' => [
        'array' => 'الحقل :attribute يجب أن تحتوي على :size UKHWV.',
        'file' => 'الحقل :attribute يجب أن يكون :size ;كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون :size.',
        'string' => 'الحقل :attribute يجب أن يكون:size الأحرف.',
    ],
    'starts_with' => 'الحقل :attribute يجب أن تبدأ بأحد الإجراءات التالية: :values.',
    'string' => 'الحقل :attribute يجب أن يكون نص',
    'timezone' => 'الحقل :attribute يجب أن تكون منطقة زمنية صالحة.',
    'unique' => 'الحقل :attribute قد اتخذت بالفعل.',
    'uploaded' => 'الحقل :attribute فشل التحميل.',
    'url' => 'الحقل :attribute يجب أن يكون عنوان URL صالحا.',
    'uuid' => 'الحقل :attribute يجب أن يكون UUID صالحا.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
