<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Các dòng ngôn ngữ sau chứa các thông điệp lỗi mặc định được sử dụng bởi
    | lớp kiểm tra hợp lệ. Một số quy tắc này có nhiều phiên bản khác nhau
    | như các quy tắc kích thước. Bạn có thể tùy chỉnh từng thông điệp ở đây.
    |
    */
    'accepted' => ':attribute phải được chấp nhận.',
    'accepted_if' => ':attribute phải được chấp nhận khi :other là :value.',
    'active_url' => ':attribute không phải là một URL hợp lệ.',
    'after' => ':attribute phải là một ngày sau :date.',
    'after_or_equal' => ':attribute phải là một ngày sau hoặc bằng :date.',
    'alpha' => ':attribute chỉ có thể chứa chữ cái.',
    'alpha_dash' => ':attribute chỉ có thể chứa chữ cái, số, dấu gạch ngang và dấu gạch dưới.',
    'alpha_num' => ':attribute chỉ có thể chứa chữ cái và số.',
    'array' => ':attribute phải là một mảng.',
    'ascii' => ':attribute chỉ có thể chứa ký tự ASCII.',
    'before' => ':attribute phải là một ngày trước :date.',
    'before_or_equal' => ':attribute phải là một ngày trước hoặc bằng :date.',
    'between' => [
        'array' => ':attribute phải có từ :min đến :max phần tử.',
        'file' => ':attribute phải có kích thước từ :min đến :max kilobyte.',
        'numeric' => ':attribute phải nằm trong khoảng từ :min đến :max.',
        'string' => ':attribute phải có từ :min đến :max ký tự.',
    ],
    'boolean' => ':attribute phải là true hoặc false.',
    'can' => 'Trường :attribute chứa một giá trị không được ủy quyền.',
    'confirmed' => ':attribute xác nhận không khớp.',
    'current_password' => 'Mật khẩu không đúng.',
    'date' => ':attribute phải là một ngày hợp lệ.',
    'date_equals' => ':attribute phải là một ngày bằng với :date.',
    'date_format' => ':attribute không khớp với định dạng :format.',
    'decimal' => ':attribute phải có :decimal chữ số thập phân.',
    'declined' => ':attribute phải bị từ chối.',
    'declined_if' => ':attribute phải bị từ chối khi :other là :value.',
    'different' => ':attribute và :other phải khác nhau.',
    'digits' => ':attribute phải có :digits chữ số.',
    'digits_between' => ':attribute phải có từ :min đến :max chữ số.',
    'dimensions' => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct' => ':attribute có giá trị trùng lặp.',
    'doesnt_end_with' => ':attribute không được kết thúc bởi một trong số những giá trị sau: :values.',
    'doesnt_start_with' => ':attribute không được bắt đầu bởi một trong số những giá trị sau: :values.',
    'email' => ':attribute phải là một địa chỉ email hợp lệ.',
    'ends_with' => ':attribute phải kết thúc bởi một trong số những giá trị sau: :values.',
    'enum' => ':attribute đã chọn không hợp lệ.',
    'exists' => ':attribute đã chọn không hợp lệ.',
    'extensions' => ':attribute phải có một trong số các phần mở rộng sau: :values.',
    'file' => ':attribute phải là một tập tin.',
    'filled' => ':attribute phải có một giá trị.',
    'gt' => [
        'array' => ':attribute phải có nhiều hơn :value phần tử.',
        'file' => ':attribute phải lớn hơn :value kilobyte.',
        'numeric' => ':attribute phải lớn hơn :value.',
        'string' => ':attribute phải dài hơn :value ký tự.',
    ],
    'gte' => [
        'array' => ':attribute phải có ít nhất :value phần tử.',
        'file' => ':attribute phải lớn hơn hoặc bằng :value kilobyte.',
        'numeric' => ':attribute phải lớn hơn hoặc bằng :value.',
        'string' => ':attribute phải dài hơn hoặc bằng :value ký tự.',
    ],
    'hex_color' => ':attribute phải là một mã màu hex hợp lệ.',
    'image' => ':attribute phải là một hình ảnh.',
    'in' => ':attribute đã chọn không hợp lệ.',
    'in_array' => ':attribute phải tồn tại trong :other.',
    'integer' => ':attribute phải là một số nguyên.',
    'ip' => ':attribute phải là một địa chỉ IP hợp lệ.',
    'ipv4' => ':attribute phải là một địa chỉ IPv4 hợp lệ.',
    'ipv6' => ':attribute phải là một địa chỉ IPv6 hợp lệ.',
    'json' => ':attribute phải là một chuỗi JSON hợp lệ.',
    'lowercase' => ':attribute phải viết thường.',
    'lt' => [
        'array' => ':attribute phải có ít hơn :value phần tử.',
        'file' => ':attribute phải nhỏ hơn :value kilobyte.',
        'numeric' => ':attribute phải nhỏ hơn :value.',
        'string' => ':attribute phải ngắn hơn :value ký tự.',
    ],
    'lte' => [
        'array' => ':attribute không được có nhiều hơn :value phần tử.',
        'file' => ':attribute phải nhỏ hơn hoặc bằng :value kilobyte.',
        'numeric' => ':attribute phải nhỏ hơn hoặc bằng :value.',
        'string' => ':attribute phải ngắn hơn hoặc bằng :value ký tự.',
    ],
    'mac_address' => ':attribute phải là một địa chỉ MAC hợp lệ.',
    'max' => [
        'array' => ':attribute không được nhiều hơn :max phần tử.',
        'file' => ':attribute không được lớn hơn :max kilobyte.',
        'numeric' => ':attribute không được lớn hơn :max.',
        'string' => ':attribute không được dài hơn :max ký tự.',
    ],
    'max_digits' => ':attribute không được nhiều hơn :max chữ số.',
    'mimes' => ':attribute phải là một tập tin có loại: :values.',
    'mimetypes' => ':attribute phải là một tập tin có loại: :values.',
    'min' => [
        'array' => ':attribute phải có ít nhất :min phần tử.',
        'file' => ':attribute phải ít nhất :min kilobyte.',
        'numeric' => ':attribute phải ít nhất :min.',
        'string' => ':attribute phải có ít nhất :min ký tự.',
    ],
    'min_digits' => ':attribute phải có ít nhất :min chữ số.',
    'missing' => ':attribute phải bị thiếu.',
    'missing_if' => ':attribute phải bị thiếu khi :other là :value.',
    'missing_unless' => ':attribute phải bị thiếu trừ khi :other là :value.',
    'missing_with' => ':attribute phải bị thiếu khi :values tồn tại.',
    'missing_with_all' => ':attribute phải bị thiếu khi tất cả :values tồn tại.',
    'multiple_of' => ':attribute phải là bội số của :value.',
    'not_in' => ':attribute đã chọn không hợp lệ.',
    'not_regex' => ':attribute có định dạng không hợp lệ.',
    'numeric' => ':attribute phải là một số.',
    'password' => [
        'letters' => ':attribute phải chứa ít nhất một chữ cái.',
        'mixed' => ':attribute phải chứa ít nhất một chữ cái viết hoa và một chữ cái viết thường.',
        'numbers' => ':attribute phải chứa ít nhất một số.',
        'symbols' => ':attribute phải chứa ít nhất một ký tự đặc biệt.',
        'uncompromised' => ':attribute đã nhập đã xuất hiện trong một rò rỉ dữ liệu. Vui lòng chọn :attribute khác.',
    ],
    'present' => ':attribute phải có mặt.',
    'present_if' => ':attribute phải có mặt khi :other là :value.',
    'present_unless' => ':attribute phải có mặt trừ khi :other là :value.',
    'present_with' => ':attribute phải có mặt khi :values tồn tại.',
    'present_with_all' => ':attribute phải có mặt khi tất cả :values tồn tại.',
    'prohibited' => ':attribute bị cấm.',
    'prohibited_if' => ':attribute bị cấm khi :other là :value.',
    'prohibited_unless' => ':attribute bị cấm trừ khi :other thuộc :values.',
    'prohibits' => ':attribute cấm :other khỏi việc có mặt.',
    'regex' => ':attribute có định dạng không hợp lệ.',
    'required' => ':attribute là bắt buộc.',
    'required_array_keys' => ':attribute phải chứa mục nhập cho: :values.',
    'required_if' => ':attribute là bắt buộc khi :other là :value.',
    'required_if_accepted' => ':attribute là bắt buộc khi :other được chấp nhận.',
    'required_unless' => ':attribute là bắt buộc trừ khi :other nằm trong :values.',
    'required_with' => ':attribute là bắt buộc khi :values tồn tại.',
    'required_with_all' => ':attribute là bắt buộc khi tất cả :values tồn tại.',
    'required_without' => ':attribute là bắt buộc khi :values không tồn tại.',
    'required_without_all' => ':attribute là bắt buộc khi không có :values nào tồn tại.',
    'same' => ':attribute và :other phải giống nhau.',
    'size' => [
        'array' => ':attribute phải chứa :size mục.',
        'file' => ':attribute phải có kích thước :size kilobyte.',
        'numeric' => ':attribute phải là :size.',
        'string' => ':attribute phải có :size ký tự.',
    ],
    'starts_with' => ':attribute phải bắt đầu bằng một trong những giá trị sau: :values.',
    'string' => ':attribute phải là một chuỗi.',
    'timezone' => ':attribute phải là một múi giờ hợp lệ.',
    'unique' => ':attribute đã được sử dụng.',
    'uploaded' => ':attribute tải lên không thành công.',
    'uppercase' => ':attribute phải viết hoa.',
    'url' => ':attribute phải là một URL hợp lệ.',
    'ulid' => ':attribute phải là một ULID hợp lệ.',
    'uuid' => ':attribute phải là một UUID hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Ở đây bạn có thể chỉ định các thông điệp kiểm tra hợp lệ tùy chỉnh cho các thuộc tính bằng cách sử dụng
    | quy tắc "attribute.rule" để đặt tên các dòng ngôn ngữ. Điều này giúp chúng ta nhanh chóng chỉ định một dòng ngôn ngữ cụ thể cho một quy tắc thuộc tính đã cho.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Các dòng ngôn ngữ sau được sử dụng để hoán đổi vị trí địa chỉ địa chỉ placeholder
    | với điều gì đó dễ đọc hơn như "Địa chỉ E-Mail" thay vì "email". Điều này chỉ giúp chúng tôi làm cho thông điệp của mình dễ hiểu hơn.
    |
    */
    'attributes' => [],
];
