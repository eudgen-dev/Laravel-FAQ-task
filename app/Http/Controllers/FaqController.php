<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFaqFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    private $faq;

    public function __construct(Faq $faq)
    {
        $this->faq = $faq;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = $this->faq->latest()->paginate();

        return view('faqs.index', compact('faqs'));
    }

    /**
     * Manage resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $faqs = $this->faq->latest()->paginate();

        return view('faqs.manage', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateFaqFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateFaqFormRequest $request)
    {
        $data = $request->all();

        $sqlData = [
            'title' => $data['title'],
            'content' => $data['content']
        ];

        $faq = $this->faq->insert($sqlData);

        return redirect()
                    ->route('manage')
                    ->withSuccess('Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$faq = $this->faq->find($id))
            return redirect()->back();

        return view('faqs.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$faq = $this->faq->find($id))
            return redirect()->back();

        return view('faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateFaqFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateFaqFormRequest $request, $id)
    {
        if (!$faq = $this->faq->find($id))
            return redirect()->back();

        $data = $request->all();

        $sqlData = [
            'title' => $data['title'],
            'content' => $data['content']
        ];

        $faq->update($sqlData);

        return redirect()
                    ->route('manage')
                    ->withSuccess('Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$faq = $this->faq->find($id))
            return redirect()->back();

        $faq->delete();

        return redirect()
                    ->route('manage')
                    ->withSuccess('Deleted!');
    }
}
