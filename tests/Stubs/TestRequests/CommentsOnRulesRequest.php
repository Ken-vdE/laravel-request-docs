<?php

namespace Rakutentech\LaravelRequestDocs\Tests\Stubs\TestRequests;

use Illuminate\Foundation\Http\FormRequest;

class CommentsOnRulesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @lrd:start
     * # Request
     * ## Rules Method Comment
     * @lrd:end
     *
     * @LRDparam extra_rules_field_1 string|max:32
     *  // either space or pipe
     * @LRDparam extra_rules_field_2 string|nullable|max:32
     *  // duplicate param in controller
     * @LRDparam this_is_a_duplicate_param request description
     *
     * @return array
     */
    public function rules()
    {
        return [
            'message_param' => 'nullable|string',
        ];
    }
}
